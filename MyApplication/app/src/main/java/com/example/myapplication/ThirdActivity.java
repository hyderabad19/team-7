package com.example.myapplication;

import android.content.Intent;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;

import androidx.annotation.NonNull;

public class ThirdActivity extends AppCompatActivity {

    private EditText runame, rpword, remail;
    private Button register;
    private TextView rlogin;
    private FirebaseAuth firebaseAuth;
    Spinner spinner=(Spinner)findViewById(R.id.spinner);

    ArrayAdapter<CharSequence> ada=ArrayAdapter.createFromResource(this,R.array.schools,android.R.layout.simple_spinner_item);

    //ada.set



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_third);
        setupUIViews();

        firebaseAuth=FirebaseAuth.getInstance();

        register.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(validate()){
                    String vemail=remail.getText().toString().trim();
                    String vpword=rpword.getText().toString().trim();
                    firebaseAuth.createUserWithEmailAndPassword(vemail,vpword).addOnCompleteListener(new OnCompleteListener<AuthResult>() {
                        @Override
                        public void onComplete(@NonNull Task<AuthResult> task) {
                            if(task.isSuccessful()) {
                                Toast.makeText(ThirdActivity.this, "Registration successful", Toast.LENGTH_SHORT).show();
                                startActivity(new Intent(ThirdActivity.this, MainActivity.class));
                            }
                            else{
                                Toast.makeText(ThirdActivity.this,"Registration Failed",Toast.LENGTH_SHORT).show();
                            }
                        }
                    });
                }
            }
        });

        rlogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(ThirdActivity.this,MainActivity.class));
            }
        });
    }

    private void setupUIViews(){
        runame=(EditText)findViewById(R.id.runame);
        rpword=(EditText)findViewById(R.id.rpword);
        remail=(EditText)findViewById(R.id.remail);
        register=(Button)findViewById(R.id.register);
        rlogin=(TextView)findViewById(R.id.rlogin);
    }
    private boolean validate(){
        Boolean res=false;
        String name=runame.getText().toString();
        String pass=rpword.getText().toString();
        String mail=remail.getText().toString();

        if(name.isEmpty() || pass.isEmpty() || mail.isEmpty()){
            Toast.makeText(this,"Enter all details!", Toast.LENGTH_SHORT).show();
        }
        else{
            res=true;
        }
        return res;
    }
}
