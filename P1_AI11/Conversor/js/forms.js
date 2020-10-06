function cargar()
{
 //   document.getElementById('longitudes').style.display="none";
    document.getElementById('volumenes').style.display="none";
    document.getElementById('pesos').style.display="none";
}
function longitudes()
{
        document.getElementById('longitudes').style.display="inline";
        document.getElementById('volumenes').style.display="none";
        document.getElementById('pesos').style.display="none";
}

function volumenes()
{
    document.getElementById('longitudes').style.display="none";
    document.getElementById('volumenes').style.display="inline";
    document.getElementById('pesos').style.display="none"; 
}
function pesos()
{
    document.getElementById('longitudes').style.display="none";
    document.getElementById('volumenes').style.display="none";
    document.getElementById('pesos').style.display="inline";
}