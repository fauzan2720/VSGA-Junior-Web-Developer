function startlog(){
    var net1 = document.getElementById('email').value + document.getElementById('password').value;
    var net2 = ('abdinegara@gmail.com') + ('123123');
    if (net1 == net2) {
        alert('Anda Berhasil Login!');
    } else {
        var logakses = document.getElementById('akses').innerHTML = 'Email atau password salah';
    }
};