function deletere(id) {
    //  alert(id)
    if (confirm('Are you sure you want to delete this')) {
        if (id.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == 1) {
                        // confirm("are you sure you want to delete");
                        //windows.alert("Hello! I am an alert box!!");
                        //alert("Record Deleted Suceesfully ");
                        setInterval('window.location.reload()', 4000);
                        //document.getElementById("txtHint").innerHTML = "Record deleted successfully";
                    } else {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                }
            };
            xmlhttp.open("GET", "delete.php?id=" + id, true);
            xmlhttp.send();
        }
    }
}