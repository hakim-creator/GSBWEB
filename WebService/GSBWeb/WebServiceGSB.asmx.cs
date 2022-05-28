using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using MySql.Data.MySqlClient;

namespace GSBWeb
{
    /// <summary>
    /// Description résumée de WebServiceGSB
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // Pour autoriser l'appel de ce service Web depuis un script à l'aide d'ASP.NET AJAX, supprimez les marques de commentaire de la ligne suivante. 
    // [System.Web.Script.Services.ScriptService]
    public class WebServiceGSB : System.Web.Services.WebService
    {

        [WebMethod]
        public string[] getMedicaments()
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeGetMed1 = conn.CreateCommand();
            commandeGetMed1.CommandText = "SELECT COUNT(*) FROM medicament";
            int nb = Convert.ToInt16(commandeGetMed1.ExecuteScalar());
            MySqlCommand commandeGetMed = conn.CreateCommand();
            commandeGetMed.CommandText = "SELECT * FROM medicament";
            commandeGetMed.ExecuteNonQuery();
            MySqlDataReader dataReader = commandeGetMed.ExecuteReader();
            string[] tabMed = new string[nb];
            int i = 0;
            while (dataReader.Read())
            {
                tabMed[i] = dataReader[0] + ";" + dataReader[1] + ";" + dataReader[2] + ";" + dataReader[3] + ";" + dataReader[4] + ";" + dataReader[5] + ";" + dataReader[6] + ";";
                i++;
            }
            conn.Close();
            return tabMed;
        }
        [WebMethod]
        public string getMedicament(int idE)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
      MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeGetMed = conn.CreateCommand();
            commandeGetMed.CommandText = "SELECT * FROM medicament WHERE id = " + idE;
      commandeGetMed.ExecuteNonQuery();
            MySqlDataReader dataReader = commandeGetMed.ExecuteReader();
            string leMed = "";
            int i = 0;
            while (dataReader.Read())
            {
                leMed = dataReader[0] + ";" + dataReader[1] + ";" + dataReader[2] + ";";
            }
            conn.Close();
            return leMed;
        }
        
      
        [WebMethod]
        public string[] getActivites()
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
        MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeGetAct1 = conn.CreateCommand();
            commandeGetAct1.CommandText = "SELECT COUNT(*) FROM activite";
            int nb = Convert.ToInt16(commandeGetAct1.ExecuteScalar());
            MySqlCommand commandeliste_act = conn.CreateCommand();
            commandeliste_act.CommandText = "SELECT * FROM activite";
            commandeliste_act.ExecuteNonQuery();
            MySqlDataReader dataReader = commandeliste_act.ExecuteReader();
            string[] liste_act = new string[nb];
            int i = 0;
            while (dataReader.Read())
            {
                liste_act[i] = dataReader[0] + ";" + dataReader[1] + ";" + dataReader[2] + ";" +
                dataReader[3] + ";";
                i++;
            }
            conn.Close();
            conn.Close();
            return liste_act;
        }

        [WebMethod]
        public string getActivite(int idE)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeGetAct1 = conn.CreateCommand();
            commandeGetAct1.CommandText = "SELECT COUNT(*) FROM activite";
            int nb = Convert.ToInt16(commandeGetAct1.ExecuteScalar());
            MySqlCommand commandeGetMed = conn.CreateCommand();
            commandeGetMed.CommandText = "SELECT * FROM activite WHERE id = " + idE;
            commandeGetMed.ExecuteNonQuery();
            MySqlDataReader dataReader = commandeGetMed.ExecuteReader();
            string[] leMed = new string[nb];
            int i = 0;
            while (dataReader.Read())
            {
                leMed[i] = dataReader[0] + ";" + dataReader[1] + ";" + dataReader[2] + ";" + dataReader[3] + ";";
            }
            conn.Close();
            conn.Close();
            return leMed[i];
        }

        [WebMethod]
        public void insActivites(string nomEle, string dateEle, string lieuEle)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "INSERT INTO activite(nom, Date_Activite, Lieu) VALUES(@nom, @Date_Activite, @Lieu)";
            commandeInscription_part.Parameters.AddWithValue("@nom", nomEle);
            commandeInscription_part.Parameters.AddWithValue("@Date_Activite", dateEle);
            commandeInscription_part.Parameters.AddWithValue("@Lieu", lieuEle);
            commandeInscription_part.ExecuteNonQuery();
            conn.Close();
        }


        [WebMethod]
        public void insInscriptions(string username, string password, string nom, string prenom)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "INSERT INTO utilisateurs(nomUtilisateur, motDePasse, nomComplet, prenomComplet) VALUES(@username, @mdp, @nom, @prenom)";
            commandeInscription_part.Parameters.AddWithValue("@username", username);
            commandeInscription_part.Parameters.AddWithValue("@mdp", password);
            commandeInscription_part.Parameters.AddWithValue("@nom", nom);
            commandeInscription_part.Parameters.AddWithValue("@prenom", prenom);
            commandeInscription_part.ExecuteNonQuery();
            conn.Close(); ;
        }
        [WebMethod]
        public void insParticipes(string nomPart, string prenomPart, string activitePart, string datePart, string lieuPart, int idPart, int idAct)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
      MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "INSERT INTO participer(nom, prenom, activite, date_activite, Lieu, id_util, id_part) VALUES(@nom, @prenom, @activite, @date_activite, @lieu, @id_util, @id_part)";
      commandeInscription_part.Parameters.AddWithValue("@nom", nomPart);
            commandeInscription_part.Parameters.AddWithValue("@prenom", prenomPart);
            commandeInscription_part.Parameters.AddWithValue("@activite", activitePart);
            commandeInscription_part.Parameters.AddWithValue("@date_activite", datePart);
            commandeInscription_part.Parameters.AddWithValue("@lieu", lieuPart);
            commandeInscription_part.Parameters.AddWithValue("@id_util", idPart);
            commandeInscription_part.Parameters.AddWithValue("@id_part", idAct);
            commandeInscription_part.ExecuteNonQuery();
            conn.Close();
        }

        [WebMethod]
        public void delActivite(int idE)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "DELETE FROM activite WHERE id = " + idE;
            
            
            commandeInscription_part.ExecuteNonQuery();
            conn.Close();
        }
        [WebMethod]
        public void delParticipation(int idE)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "DELETE FROM participer WHERE id = " + idE;


            commandeInscription_part.ExecuteNonQuery();
            conn.Close();
        }





        [WebMethod]
        public string getUtilisateur(string nomU, string motDePasseU)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeGetAct1 = conn.CreateCommand();
            commandeGetAct1.CommandText = "SELECT COUNT(*) FROM utilisateurs WHERE nomUtilisateur = '" + nomU + "' and motDePasse ='" + motDePasseU + "'";
            int nb = Convert.ToInt16(commandeGetAct1.ExecuteScalar());
            MySqlCommand commandeGetMed = conn.CreateCommand();
            commandeGetMed.CommandText = "SELECT * FROM utilisateurs WHERE nomUtilisateur = '" + nomU+ "' and motDePasse ='" + motDePasseU + "'";
            commandeGetMed.ExecuteNonQuery();
            MySqlDataReader dataReader = commandeGetMed.ExecuteReader();
            string[] leMed = new string[nb];
            int i = 0;
            while (dataReader.Read())
            {
                leMed[i] = dataReader[0] + ";" + dataReader[1] + ";" + dataReader[2] + ";" + dataReader[3] + ";" + dataReader[4] + ";" + dataReader[5] + ";";
            }
            conn.Close();
            conn.Close();
            return leMed[i];
            
        }

       

        [WebMethod]
        public void updProfile(string nom, string prenom, string idE)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "UPDATE  utilisateurs SET nomComplet= '" + nom+"' , prenomComplet ='" + prenom+ "' WHERE id="+idE;


            commandeInscription_part.ExecuteNonQuery();
            conn.Close();
        }

        [WebMethod]
        public void updPassword(string password, int idEl)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "UPDATE  utilisateurs SET motDePasse= '" + password  + "' WHERE id=" + idEl;


            commandeInscription_part.ExecuteNonQuery();
            conn.Close();
        }

        [WebMethod]
        public void insMedicaments(string nomElM, string desElM, string secondElM, string therapElM, string positiveElM, string negativeElM)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeInscription_part = conn.CreateCommand();
            commandeInscription_part.CommandText = "INSERT INTO medicament(nom, Description, Effet_Second, Effet_Therap, positive, negative) VALUES(@nom, @Description, @Effet_Second, @Effet_Therap, @positive, @negative)";
            commandeInscription_part.Parameters.AddWithValue("@nom", nomElM);
            commandeInscription_part.Parameters.AddWithValue("@Description", desElM);
            commandeInscription_part.Parameters.AddWithValue("@Effet_Second", secondElM);
            commandeInscription_part.Parameters.AddWithValue("@Effet_Therap", therapElM);
            commandeInscription_part.Parameters.AddWithValue("@positive", positiveElM);
            commandeInscription_part.Parameters.AddWithValue("@negative", negativeElM);
            commandeInscription_part.ExecuteNonQuery();
            conn.Close();
        }


        [WebMethod]
        public string getHistoriques(int idE)
        {
            string connString = "Server=localhost;Database=gsb;User Id = root; Password =; SslMode = none";
            MySqlConnection conn = new MySqlConnection(connString);
            conn.Open();
            MySqlCommand commandeGetAct1 = conn.CreateCommand();
            commandeGetAct1.CommandText = "SELECT COUNT(*) FROM participer";
            int nb = Convert.ToInt16(commandeGetAct1.ExecuteScalar());
            MySqlCommand commandeGetMed = conn.CreateCommand();
            commandeGetMed.CommandText = "SELECT nom,prenom, activite, date_activite, Lieu FROM participer WHERE id_util = " + idE;
            commandeGetMed.ExecuteNonQuery();
            MySqlDataReader dataReader = commandeGetMed.ExecuteReader();
            string[] leMed = new string[nb];
            int i = 0;
            while (dataReader.Read())
            {
                leMed[i] = dataReader[0] + ";" + dataReader[1] + ";" + dataReader[2] + ";" + dataReader[3] + ";" + dataReader[4] +  ";" ;
                i++;
            }
            conn.Close();
            conn.Close();
            return leMed[i];




        }
    }
}
    

