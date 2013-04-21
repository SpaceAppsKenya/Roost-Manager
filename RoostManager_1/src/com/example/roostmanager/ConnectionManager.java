/**
 * 
 */
package com.example.roostmanager;

import java.io.BufferedInputStream;
import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicHeader;
import org.apache.http.protocol.HTTP;
import org.apache.http.util.ByteArrayBuffer;
import org.holoeverywhere.widget.Toast;
import org.json.JSONObject;

import android.content.Context;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.util.Log;

/**
 * @author allay
 *
 */


public class ConnectionManager {

	private boolean connection;
	// localhost
	private String URL = "http://10.0.2.2/roostmanager/modules/listener.php";
	private StringEntity entity;
	private String responseString;
	
	// Http Client and Post header
	HttpClient client = new DefaultHttpClient();
	HttpPost post = new HttpPost(URL);
	HttpResponse response;
	InputStream is;
	
	public ConnectionManager(){}
	
	// check connectivity
	public boolean checkConnection(Context context)
	{
		ConnectivityManager manager = (ConnectivityManager)context.getSystemService(Context.CONNECTIVITY_SERVICE);
		NetworkInfo info = manager.getActiveNetworkInfo();
		
		connection = (info == null || !info.isConnected() || !info.isAvailable())? false:true;
	
		return connection;
	}
	
	// post JSON data and return reponse
	public String httpPost(JSONObject data)
	{
		try{
			post.setHeader("json", data.toString());
			post.setHeader("Accept", "application/json");
			post.setHeader("Content-type", "application/json");
			post.getParams().setParameter("jsondata", data);
			response = client.execute(post);
			if(response != null)
			{
				is = response.getEntity().getContent();
				BufferedReader reader = new BufferedReader(new InputStreamReader(is));
				StringBuilder sb = new StringBuilder();
				String line; 
				
				while((line = reader.readLine()) != null)
				{
					sb.append(line);
				}
				responseString = sb.toString();
				
			}
		}
		catch(Exception ex)
		{
			Log.e("HTTP Post Exception", ex.toString());
		}
		
		return responseString;
	}
}
