import { getAll, remove } from './db.js';

const generateTable = (tableRows = []) => {
    console.log(tableRows);
};

getAll().then( data => generateTable(data) );