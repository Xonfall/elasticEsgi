let csvToJson = require('convert-csv-to-json');

let fileInputName = 'sourceEx.csv';
let fileOutputName = 'file.json';

csvToJson.generateJsonFileFromCsv(fileInputName,fileOutputName);