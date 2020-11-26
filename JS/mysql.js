//const mysql = require('mysql');

var mysql = require("mysql");

const dbConn = mysql.createConnection({
    host: 'localhost',
    port: 3306,
    user: 'root',
    password: '1234',
    database: 'bank'
});

dbConn.connect();

dbConn.query('select * from account', function(err, results, fields) {
    if (err) {
        console.log(err);
    }

    console.log(results);
});

dbConn.end()