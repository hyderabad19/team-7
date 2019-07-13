package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.MediaController;
import android.widget.VideoView;

import java.util.ArrayList;

public class second extends AppCompatActivity {
    VideoView videoView;
    ListView listView;
    ArrayList<String> videoList;
    ArrayAdapter adapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_second);
        videoView=findViewById(R.id.videoview);
        listView=findViewById(R.id.listview);
        videoList=new ArrayList<>();
        videoList.add();/////add video many videos;

        adapter=new ArrayAdapter(second.this,android.R.layout.simple_list_item_1,videoList);
        listView.setAdapter(adapter);
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                switch(position){
                    case 0:
                        videoView.setVideoURI(Uri.parse("android.resour"));/// add url of next video
                        break; // add all 5 cases
                }
                videoView.setMediaController(new MediaController(second.this));
                videoView.requestFocus();
                videoView.start();
            }
        });
    }
}
