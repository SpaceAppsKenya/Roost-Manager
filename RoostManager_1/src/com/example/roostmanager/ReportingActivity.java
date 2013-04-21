package com.example.roostmanager;

import android.os.Bundle;
import android.widget.EditText;

import com.actionbarsherlock.app.ActionBar;
import com.actionbarsherlock.app.SherlockActivity;
import com.actionbarsherlock.view.Menu;
import com.actionbarsherlock.view.MenuInflater;

public class ReportingActivity extends SherlockActivity {

	EditText update; 
	String report;
	ActionBar bar;
	
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_reporting);
        
        bar = getSupportActionBar();
        
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
    	
    	MenuInflater inflater = getSupportMenuInflater();
    	inflater.inflate(R.menu.activity_reporting, menu);
    	
		return true;
    	
    }
    
}
