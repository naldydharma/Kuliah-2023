/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package projekBaru.controller;

/**
 *
 * @author ASUS
 */
public class userController {
    
    String namaObat;
    String akunPembayaran;   
    int jumlah = 0;
    
    public void tambahObat(String namaObat){
        this.namaObat = namaObat;
        this.jumlah++;
    }
    
    public void pembayaran(String akunPembayaran){
        this.akunPembayaran = akunPembayaran;
    }
    
    public void pesan(){
        //pesan ke database
    }  
}
