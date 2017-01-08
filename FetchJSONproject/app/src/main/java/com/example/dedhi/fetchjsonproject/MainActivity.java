package com.example.dedhi.fetchjsonproject;

import android.os.Bundle;
import android.app.TabActivity;
import android.content.Intent;
import android.widget.TabHost;

@SuppressWarnings("deprecation")
public class MainActivity extends TabActivity  {


    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        TabHost tabhost = getTabHost();
        TabHost.TabSpec spec;
        Intent intent;
        intent = new Intent().setClass(this, barang.class);
        spec = tabhost.newTabSpec("barang").setIndicator("barang",null).setContent(intent);
        tabhost.addTab(spec);
    }
}
