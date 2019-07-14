package com.example.myapplication;

import android.app.ProgressDialog;
import android.content.Intent;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;

public class MainActivity extends AppCompatActivity {

    private EditText uname;
    private EditText pword;
    private TextView info;
    private Button login;
    private int cnt=3;
    private TextView register;
    private FirebaseAuth firebaseAuth;
    private ProgressDialog pd;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        uname=(EditText)findViewById(R.id.uname);
        pword=(EditText)findViewById(R.id.pword);
        info=(TextView)findViewById(R.id.ia);
        login=(Button)findViewById(R.id.login);
        register=(TextView)findViewById(R.id.regis);
        info.setText("No of attemptts remaining: 5");
        firebaseAuth = FirebaseAuth.getInstance();
        FirebaseUser user=firebaseAuth.getCurrentUser();
        pd=new ProgressDialog(this);

        /*if(user != null){
            finish();
            startActivity(new Intent(MainActivity.this, second.class) );
        }*/
        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Log.d("ggigi", "unmae "+uname.getText().toString()+"pword"+pword.getText().toString());
                validate(uname.getText().toString(),pword.getText().toString());
            }
        });
        register.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(MainActivity.this,ThirdActivity.class));
            }
        });
    }

    private void validate(String un,String pw){

        pd.setMessage("Validating...");
        pd.show();
        if(un.equals("hari")&&pw.equals("happi")){
            startActivity(new Intent(MainActivity.this,adminActivity.class));
        }
        firebaseAuth.signInWithEmailAndPassword(un,pw).addOnCompleteListener(new OnCompleteListener<AuthResult>() {
            @Override
            public void onComplete(@NonNull Task<AuthResult> task) {
                pd.dismiss();
                if(task.isSuccessful()){
                    startActivity(new Intent(MainActivity.this, second.class) );
                    Toast.makeText(MainActivity.this,"Login Ok!",Toast.LENGTH_SHORT).show();
                }
                else{
                    Toast.makeText(MainActivity.this,"Login Failed",Toast.LENGTH_SHORT).show();
                    cnt--;
                    info.setText("No. of Attempts:"+cnt);
                    if(cnt==0){
                        login.setEnabled(false);
                    }
                }
            }
        });
    }
}
