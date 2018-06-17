using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

/// <summary>
/// Summary description for VendedorControlador
/// </summary>
public class VendedorControlador:SuperControlador
{
    public VendedorControlador()
    {
    }

    public void insertVendedor(VendedorModelo x, String contrasena) {
        MySqlConnection con = objConexion;
        con.Open();
        LoginControlador Lc = new LoginControlador();
      x.idVendedor=  Lc.insertarLogin(contrasena,2,1);
        string query = @"insert into vendedor (idvendedor,nombre,foto,telefono,ubicacion) values("+x.idVendedor+",'"+x.nombre+"','"+x.foto+"','"+x.telefono+"','"+x.ubicacion+"');";
        MySqlCommand comando = new MySqlCommand(query, con);
        comando.ExecuteNonQuery();
        con.Close();
    }

    public void modificarVendedor(VendedorModelo x) {
        MySqlConnection con = objConexion;
        con.Open();
        string query = @"update vendedor set nombre='"+x.nombre+"', foto='"+x.foto+"',telefono = '"+x.telefono+"', ubicacion='"+x.ubicacion+"' where idVendedor="+x.idVendedor+";";
        MySqlCommand comando = new MySqlCommand(query, con);
        comando.ExecuteNonQuery();
        con.Close();
    }

    public List<VendedorModelo> consultageneralvendedores(int pag, int cantidad)
    {
        List<VendedorModelo> resultado = new List<VendedorModelo>();
        int control = 0;
        MySqlConnection con = objConexion;
        var CommandText = "select * from vendedor inner join login where vendedor.idvendedor= login.usuario;";
        MySqlCommand getID = new MySqlCommand(CommandText, con);
        con.Open();
        MySqlDataReader Reader;
        Reader = getID.ExecuteReader();

        while (Reader.Read() && control < (cantidad * (pag - 1)) + cantidad)
        {
            if ((control >= cantidad * (pag - 1) && pag != 1) || (pag == 1 && control < cantidad))
            {

                VendedorModelo modeloconsulta = new VendedorModelo();
                modeloconsulta.idVendedor = (int)Reader["idVendedor"];
                modeloconsulta.nombre = (String)Reader["nombre"];
                modeloconsulta.foto = (String)Reader["foto"];
                modeloconsulta.telefono = (String)Reader["telefono"];
                modeloconsulta.ubicacion = (String)Reader["ubicacion"];  
                modeloconsulta.estado = (Int16)Reader["estado"];

                resultado.Add(modeloconsulta);
            } control++;
        }
        con.Close();
        return resultado;

    }

    public List<VendedorModelo> consultaDetallevendedores(int id)
    {
        List<VendedorModelo> resultado = new List<VendedorModelo>();
        MySqlConnection con = objConexion;
        var CommandText = "select * from vendedor inner join login where vendedor.idvendedor="+id+" && login.usuario="+id+"; ";
        MySqlCommand getID = new MySqlCommand(CommandText, con);
        con.Open();
        MySqlDataReader Reader;
        Reader = getID.ExecuteReader();

        while (Reader.Read())
        {

            VendedorModelo modeloconsulta = new VendedorModelo();
            modeloconsulta.idVendedor = (int)Reader["idVendedor"];
            modeloconsulta.nombre = (String)Reader["nombre"];
            modeloconsulta.foto = (String)Reader["foto"];
            modeloconsulta.telefono = (String)Reader["telefono"];
            modeloconsulta.ubicacion = (String)Reader["ubicacion"];
            modeloconsulta.calificacion = (int)Reader["calificacion"];
            modeloconsulta.estado = (Int16)Reader["estado"];
            resultado.Add(modeloconsulta);
        }
        con.Close();
        return resultado;

    }

    public void eliminarVendedor(int idVendedor)
    {
        MySqlConnection con = objConexion;
        con.Open();
        string query = @"Delete from Vendedor where idVendedor="+idVendedor+";";
        MySqlCommand comando = new MySqlCommand(query, con);
        comando.ExecuteNonQuery();
        con.Close();
    }
}