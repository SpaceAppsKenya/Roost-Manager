package com.example.roostmanager ;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import com.actionbarsherlock.app.ActionBar;
import com.actionbarsherlock.app.SherlockActivity;
import com.actionbarsherlock.view.Menu;
import com.actionbarsherlock.view.MenuInflater;

public class HomeActivity extends SherlockActivity {

	ActionBar bar;
	Context context = HomeActivity.this;
	
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        
        bar = getSupportActionBar();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
    	MenuInflater inflater = getSupportMenuInflater();
    	inflater.inflate(R.menu.activity_home, menu);
       
        return true;
    }
    
    
    // get practices info listener
    public void practiceListener(View view)
    {
    	Intent intent =  new Intent(context, InfoActivity.class);
    	startActivity(intent);
    }
    
    // get calendar events listener
    public void calendarListener(View view)
    {
    	
    }
    
    // disease reporting listener	
    public void reportingListener(View view)
    {
    	// start reporting intent
    	Intent intent = new Intent(context,ReportingActivity.class);
    	startActivity(intent);
    	
    }
    
    // 
    public void productionListener(View view)
    {
    	// start reporting intent
    	Intent intent = new Intent(context, DailyProductionActivity.class);
    	startActivity(intent);
    }
    
}
