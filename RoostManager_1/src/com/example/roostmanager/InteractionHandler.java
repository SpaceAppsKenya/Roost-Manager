/**
 * 
 */
package com.example.roostmanager;

import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;

import org.apache.http.HttpHost;
import org.apache.http.HttpRequest;
import org.apache.http.HttpResponse;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.ResponseHandler;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.client.methods.HttpUriRequest;
import org.apache.http.conn.ClientConnectionManager;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicHeader;
import org.apache.http.params.HttpParams;
import org.apache.http.protocol.HTTP;
import org.apache.http.protocol.HttpContext;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.content.Context;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.util.Log;

/**
 * @author allay
 * 
 * Handle all user interaction
 *
 */
public class InteractionHandler {
	
	
	private StringEntity entity;
	private String username;
	private String userID;
	private String response;
	private String responseCode;
	private String description;
	
	Map<String, String> data = new HashMap<String, String>();
	Object json;
	JSONObject jsData;
	JSONArray jsDataArray;
	ConnectionManager man = new ConnectionManager();
	JSONArray respArray;
	public InteractionHandler(){}
	
	// set return code
	public void setResponseCode(String code)
	{
		responseCode = code;
	}
	
	// set description
	public void setDescription(String desc)
	{
		description = desc;
	}
	
	// get return code
	public String getResponseCode()
	{
		return this.responseCode;
	}
	
	public String getDescription()
	{
		return this.description;
	}

	// user log in
	public void login(String uname, String pass)
	{
		// create JSON Object
		data.put("username", uname);
		data.put("password", pass);
		data.put("action", "login");
		
		jsData = new JSONObject(data);
		
		response = man.httpPost(jsData);
		// trace
		Log.i("RESPONSE ", response);
		if(response != null)
		{
			try {
				
				jsData = new JSONObject(response);
				// trace
				Log.i("Json Data", jsData.toString());
				
				username = jsData.getString("user");
				responseCode = jsData.getString("response_code");
				description = jsData.getString("description");
				
				ManagerUser.setUsername(username);
				this.setResponseCode(responseCode);
				this.setDescription(description);
				
			} catch (JSONException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
		
	}
	
	// change user password
	public void changePassword(String username, String password, String newPassword)
	{
		
	}
	
	// get Updates and cache
	public void getUpdates(Context context)
	{
		
	}
		
	// post online
	
}
