package com.example.dedhi.fetchjsonproject;

/**
 * Created by dedhi on 01/07/2017.
 */

import android.app.ListActivity;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.widget.ListAdapter;
import android.widget.SimpleAdapter;

import org.apache.http.NameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
public class barang extends ListActivity  {

    JSONConverter jsonParser = new JSONConverter();
    ArrayList<HashMap<String, String>> bukuList;
    JSONArray buku = null;
    private static final String DATA_URL = "http://10.0.2.2/projectwebsite/tampil.php";
    private static final String TAG_Barang = "barang";
    private static final String TAG_Id = "id";
    private static final String TAG_Nama = "nama";
    private static final String TAG_Jenis = "jenis";
    private static final String TAG_Suplier = "suplier";

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.barang);
        bukuList = new ArrayList<HashMap<String, String>>();
        new LoadData().execute();
    }

    class LoadData extends AsyncTask<String, String, String> {
        protected String doInBackground(String... args) {
            List<NameValuePair> params = new ArrayList<NameValuePair>();
            JSONObject json = jsonParser.makeHttpRequest(DATA_URL, "GET", params);
            Log.d("Data JSON: ", json.toString());
            try {
                buku = json.getJSONArray(TAG_Barang);
                for (int i = 0; i < buku.length(); i++) {
                    JSONObject c = buku.getJSONObject(i);
                    String id_barang = c.getString(TAG_Id);
                    String nama = c.getString(TAG_Nama);
                    String jenis = c.getString(TAG_Jenis);
                    String suplier = c.getString(TAG_Suplier);
                    HashMap<String, String> map = new HashMap<String, String>();
                    map.put(TAG_Id, id_barang);
                    map.put(TAG_Nama, nama);
                    map.put(TAG_Jenis, jenis);
                    map.put(TAG_Suplier, suplier);
                    bukuList.add(map);
                }
            } catch (JSONException e) {
                e.printStackTrace();
            }
            return null;
        }

        protected void onPostExecute(String file_url) {
            runOnUiThread(new Runnable() {
                public void run() {
                    ListAdapter adapter = new SimpleAdapter(
                            barang.this, bukuList, R.layout.barang_item,
                            new String[] { TAG_Nama, TAG_Jenis, TAG_Suplier },
                            new int[] { R.id.nama, R.id.jenis, R.id.suplier });
                    setListAdapter(adapter);
                }
            });
        }
    }

}
