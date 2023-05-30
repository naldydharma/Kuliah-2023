/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package projekBaru.model;

import projekBaru.connection.Connector;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
/**
 *
 * @author ASUS
 */
public class pembelian {
    
    Connection koneksi;
    Statement stm ;
    ResultSet result;
    
    public pembelian() {
        try {
            this.koneksi = new Connector().getConnection();
            this.stm = koneksi.createStatement();
        } catch (SQLException ex) {
            Logger.getLogger(pembelian.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    } 
    public void addData(String barang, int jumlah, int total_harga){
        
        try {

            String query = "INSERT INTO `pembelian` (`barang`, `jumlah`, `total_harga`) VALUES (?,?,?)";

            PreparedStatement statement = koneksi.prepareStatement(query);

            statement.setString(1, barang);
            statement.setInt(2, jumlah);
            statement.setInt(3, total_harga);

            int rowsInserted = statement.executeUpdate();

            if (rowsInserted > 0) {
                System.out.println("Berhasil.");
            }
        } catch (SQLException e) {
            System.out.println("Gagal :" + e.getMessage());
        }
    }

    public void getData() throws SQLException{
        result = stm.executeQuery("select * from pembelian");
        while(result.next()){
            String barang = result.getString("barang");
            System.out.println(barang);
        }
    } 
    
     public void getTableData(JTable jtable) throws SQLException{
        result = stm.executeQuery("select * from pembelian");
        DefaultTableModel model = (DefaultTableModel)jtable.getModel();
        model.setRowCount(0);
        while(result.next()){
            String barang = result.getString("barang");
            String jumlah = result.getString("jumlah");
            String total_harga = result.getString("total_harga");
            model.addRow(new Object[]{barang,jumlah,total_harga});
        } 
        
    } 
     
     public void updateData(int jumlah_barang, int id_barang, int total_harga){
     
        try {
            String query = "UPDATE pembelian SET jumlah = ? , total_harga = ?  WHERE id_barang = ? ";

            PreparedStatement statement = koneksi.prepareStatement(query);

            statement.setInt(1, jumlah_barang); 
            statement.setInt(3, id_barang);
            statement.setInt(2, total_harga);

            int rowsUpdated = statement.executeUpdate();

            if (rowsUpdated > 0) {
                System.out.println("Data berhasil diupdate.");
            } else {
                System.out.println("Data tidak ditemukan.");
            }
        } catch (SQLException e) {
            System.out.println("Gagal mengupdate data: " + e.getMessage());
        }
     }
     
}
