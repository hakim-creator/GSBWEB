using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace GSBWebService
{
    /// <summary>
    /// Description résumée de WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // Pour autoriser l'appel de ce service Web depuis un script à l'aide d'ASP.NET AJAX, supprimez les marques de commentaire de la ligne suivante. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {
        private string host;

        [WebMethod]
        public string connexionBD()
        {
               GetDBConnection(string host, int port, string database, string username, string password)
            {
                // Connection String.
                String connString = "Server=" + host + ";Database=" + database
                    + ";port=" + port + ";User Id=" + username + ";password=" + password;

                MySqlConnection conn = new MySqlConnection(connString);

                return conn;
            }
        }

        private void GetDBConnection(string v1, object host, int v2, object port, string v3, object database, string v4, object username, string v5, object password)
        {
            throw new NotImplementedException();
        }
    }
}
