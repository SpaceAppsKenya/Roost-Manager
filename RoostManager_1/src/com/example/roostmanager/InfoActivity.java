package com.example.roostmanager;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import android.content.Context;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import com.actionbarsherlock.app.SherlockActivity;
import com.actionbarsherlock.view.Menu;
import com.actionbarsherlock.view.MenuInflater;

public class InfoActivity extends SherlockActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info);
        
        final ListView listview = (ListView) findViewById(R.id.list);
        String[] values = new String[] {"Physical Facility", "Health Management", "Environmental Factors"};
        final ArrayList<String> list = new ArrayList<String>();
        for (int i = 0; i < values.length; ++i) {
          list.add(values[i]);
        }
        final StableArrayAdapter adapter = new StableArrayAdapter(this,android.R.layout.simple_list_item_1, list);
        listview.setAdapter(adapter);

        listview.setOnItemClickListener(new AdapterView.OnItemClickListener() {

          
		@Override
		public void onItemClick(AdapterView<?> parent, final View view, int position,
				long id) {
			final String item = (String) parent.getItemAtPosition(position);
			
			// get selected item and display relevant info
			if(item.equals("Physical Facility"))
			{
				// go to activity
			}
			else if(item.equals("Health Management"))
			{
				
			}
			
            /*
				view.animate().setDuration(2000).alpha(0)
                .withEndAction(new Runnable() 
                {
                  @Override
                  public void run() {
                    list.remove(item);
                    adapter.notifyDataSetChanged();
                    view.setAlpha(1);
                 }
                });
			 */
		}

        });
      }

      private class StableArrayAdapter extends ArrayAdapter<String> {

        HashMap<String, Integer> mIdMap = new HashMap<String, Integer>();

        public StableArrayAdapter(Context context, int textViewResourceId,
            List<String> objects) {
          super(context, textViewResourceId, objects);
          for (int i = 0; i < objects.size(); ++i) {
            mIdMap.put(objects.get(i), i);
          }
        }

        @Override
        public long getItemId(int position) {
          String item = getItem(position);
          return mIdMap.get(item);
        }

        @Override
        public boolean hasStableIds() {
          return true;
        }
    }
    
    
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getSupportMenuInflater();
        inflater.inflate(R.menu.activity_info, menu);
        return true;
    }
    
}
