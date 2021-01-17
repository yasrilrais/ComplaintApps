package com.example.complaintapps

import android.content.Context
import android.content.Intent
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import androidx.recyclerview.widget.RecyclerView
import kotlinx.android.synthetic.main.riwayat_list.view.*

class RVAdapterKeluhan(private val context: Context, private val arrayList: ArrayList<keluhan>) : RecyclerView.Adapter<RVAdapterKeluhan.Holder>() {

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): Holder {
        return Holder(LayoutInflater.from(parent.context).inflate(R.layout.riwayat_list,parent,false))
    }

    override fun getItemCount(): Int = arrayList!!.size

    override fun onBindViewHolder(holder: Holder, position: Int) {
        holder.view.IdList.text = arrayList?.get(position)?.id_keluhan.toString()
        holder.view.KdList.text = "Kd : "+arrayList?.get(position)?.keluhan
        holder.view.TanggalList.text = "Namafak : "+arrayList?.get(position)?.tgl_input

        holder.view.cvList.setOnClickListener {

            val i = Intent(context,KomplainActivity::class.java)
            i.putExtra("editmode","1")
            i.putExtra("id_keluhan",arrayList?.get(position)?.id_keluhan)
            i.putExtra("keluhan",arrayList?.get(position)?.keluhan)
            i.putExtra("tanggal input",arrayList?.get(position)?.tgl_input)
            context.startActivity(i)

        }
    }
    class Holder(val view: View) : RecyclerView.ViewHolder(view)
}