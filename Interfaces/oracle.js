const oracledb = require('oracledb');

const { DB_USER, DB_PASSWORD, DB_CONNECTION_STRING, ORACLE_DIR } = require('./config.js');

oracledb.initOracleClient( { libDir: ORACLE_DIR });

// oracledb.outFormat = oracledb.OUT_FORMAT_OBJECT;
async function run() {

  let connection;
  try {
    //try connecting to the DB using the values imported from config.js
    connection = await oracledb.getConnection( {
      user          : DB_USER,
      password      : DB_PASSWORD,
      connectString : DB_CONNECTION_STRING
    });

    //execute the following query and log the result in the console.
  
    const result = await connection.execute(
      //run node oracle.js in terminal to run command in database
      `SELECT sysdate from dual`,  //get the current time from the DB
    );
    console.log(result.rows);

  } catch (err) {
    console.error(err);
  } finally {
    if (connection) {
      try {
        await connection.close();
      } catch (err) {
        console.error(err);
      }
    }
  }
}

run();