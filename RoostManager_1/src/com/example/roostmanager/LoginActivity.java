package com.example.roostmanager;

import org.holoeverywhere.app.Activity;
import org.holoeverywhere.app.ProgressDialog;
import org.holoeverywhere.widget.Toast;
import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class LoginActivity extends Activity {

	Button login;
	EditText user, pass;
	String username, password, message;
	Context context = LoginActivity.this;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_login);
		
		user = (EditText)findViewById(R.id.userEdit);
		pass = (EditText)findViewById(R.id.passEdit); 
		
	}
	
	// login listener
	public void loginListener(View view)
	{
		username = user.getText().toString().trim();
		password = pass.getText().toString().trim();
		
		// if fields are empty
		if(username.length() == 0 || password.length() == 0)
		{
			message = "Please enter both username and password";
			Toast.makeText(this, message, Toast.LENGTH_LONG).show();
		}
		else{
			
			// authenticate
			// Signing in progress dialog 
			message = "Signing in...";
			
			ProgressDialog progress = new ProgressDialog(context);
			progress.setTitle("Log in");
			progress.setMessage(message);
			
			//Starting signing in AsyncTask for authentication
			new LoginTask(context, progress).execute();
		}
	}
	
	// sign up listener
	public void signUpListener(View view)
	{
		// go to sign-up form
		Intent intent = new Intent(context, SignUpActivity.class);
		startActivity(intent);
	}
	
	/*
	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.activity_login, menu);
		return true;
	}
	*/
	
	private class LoginTask extends AsyncTask<Void, Void, String>
	{	
		private String returnCode;
		private boolean connection;
		ConnectionManager manager;
		InteractionHandler interact;
		Context context;
		ProgressDialog progress;
		
		// constructor
		protected LoginTask(Context cont, ProgressDialog prog)
		{
			this.context = cont;
			this.progress = prog;
		}
		
		protected void onPreExecute()
		{
			progress.show();
		}
		
		@Override
		protected String doInBackground(Void... arg0) {
			
			manager = new ConnectionManager();
			
			// check for connectivity first
			connection = manager.checkConnection(context);
			interact = new InteractionHandler();
			
			if(connection == true)
			{
				// process login
				interact.login(username, password);
				System.out.println("User details " + username + " " + password);
				return "complete";
			}
			else{
				
				return "complete";
			}
		}
			
		protected void onPostExecute(String result)
		{
			if(result.equals("complete"))
			{
				progress.dismiss();
				
				// if no connection
				if(connection == false)
				{
					message = "No internet connection detected. Try when connected.";
					Toast.makeText(context, message, Toast.LENGTH_LONG).show();
				}
				else
				{
					returnCode = interact.getResponseCode();
					if(returnCode != null)
					{
						if(returnCode.equals("0"))
						{
							// trace
							username = ManagerUser.getUsername();
							Log.i("User ", username);
							Log.i("Return Code", returnCode);
							// go to user home screen
							Intent homeIntent = new Intent(context, HomeActivity.class);
							startActivity(homeIntent);
						}
						else
						{
							message = interact.getDescription();
							Toast.makeText(context, message, Toast.LENGTH_LONG).show();
						}
					}
					else
					{
						// No data 
						message = "Error processing request";
						Toast.makeText(context, message, Toast.LENGTH_LONG).show();
					}
				}
		}
		
	}
  }
}
