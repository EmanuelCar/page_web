var base= ['log', 'login', 'logon', 'logout', 'logoff', 'logged'];

function check(field) {
  var name = field.value;
  var l = name.length;
  var idx = base.indexOf(name);
  if(idx == -1) {
    var tempo = base.filter(function(x) {
      return x.substr(0, l) == name;
    });
    if(tempo.length != 1) return;
    name = tempo[0];	
    field.value = name;
  }
  var content = name + " trouvé.";
  document.getElementById("storage").innerHTML=content;
}