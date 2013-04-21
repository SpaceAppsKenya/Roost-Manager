package com.example.roostmanager;

import com.actionbarsherlock.app.SherlockActivity;

import com.actionbarsherlock.view.MenuInflater;

import android.os.Bundle;

public class PhysicalFacilityActivity extends SherlockActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_physical_facility);
    }

    @Override
    public boolean onCreateOptionsMenu(com.actionbarsherlock.view.Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
    	MenuInflater inflater = getSupportMenuInflater();
    	inflater.inflate(R.menu.activity_home, menu);
       
        return true;
    }
    
}
