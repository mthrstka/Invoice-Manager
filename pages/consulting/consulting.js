import { createPool, query as _query, end } from "mariadb";
const pool = createPool({
    host: '127.0.0.1',
    user: 'geigus',
    password: '',
    connectionLimit: 5
});

let db;
    try{
    db = await pool.getConnection();
    _query("use PureProduction");
} catch(error){
    throw error;
}

async function mariadb(query) {
    try {
        const val = await _query(query);
        console.log(val);
        return val;
    } catch (error) {
        throw error;
    } finally {
        if (db) return end();
    }
}

mariadb();

const table = mariadb("SELECT * FROM `Consulting`");

document.getElementById("datatable").innerHTML = "test";
// document.write(`<h2>${table}</h2>`);