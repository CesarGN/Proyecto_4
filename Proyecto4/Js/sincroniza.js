addEvent(window, 'load', inicializa, true);
var db;
var proyecto;
var ListaProyectos;
var conexion;


function inicializa() {

    if (!window.openDatabase)
    {
        alert('Tu navegador no soporta Web SQL....');
        return;
    }

    db = window.openDatabase('BD_Proyectos',
            '1.0',
            'BD de Proyectos',
            5 * 1024 * 1024);

    var sincro = document.getElementById('sincroniza');

    sincro.addEventListener('click', function()
    {

        db.transaction(function(tx)
        {
            var arreglo = new array();
            var aux = new array();
            tx.executeSql('Select * from Proyectos', [],
                    function(tx, results) {

                        var len = results.rows.length, i;

                        for (i = 0; i < len; i++) {

                            // document.write(results.rows.item(i).proyecto);
                            aux[0] = results.rows.item(i).proyecto;
                            //var nombre = results.rows.item(i).proyecto;
                            aux[1] = results.rows.item(i).Estatus;
                            //var estatus = results.rows.item(i).Estatus;
                            aux[2] = results.rows.item(i).NoId;
                            //var id_usuario = results.rows.item(i).NoId;
                            aux[3] = results.rows.item(i).feI;
                            //var fechai = results.rows.item(i).feI;
                            aux[4] = results.rows.item(i).feT;
                            //var fechaf = results.rows.item(i).feT;
                            aux[5] = results.rows.item(i).Nombre;
                            // var materia = results.rows.item(i).Nombre;
                            arreglo[i] = aux;
                            
                             alert(aux[0]);
                        }
                        document.write(arreglo[0][0]);
                    },
                    function(t, e)
                    {
                        console.log('Error al obtener datos: ' + e.message);
                    }

            );
        });
    });





}








//___________________________________________________
function addEvent(elemento, nomevento, funcion, captura)
{

    if (elemento.attachEvent)
    {
        elemento.attachEvent('on' + nomevento, funcion);


        return true;
    }
    else {

        if (elemento.addEventListener)
        {
            elemento.addEventListener(nomevento, funcion, captura);
            return true;
        }
        else
            return false;
    }
}
