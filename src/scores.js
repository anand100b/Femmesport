

name = "michael jordan"
$.getJSON(`https://www.thesportsdb.com/api/v1/json/1/searchplayers.php?t=${name}`, function(data){
    console.log(data);

});