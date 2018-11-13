const Blockchain = require('./blockchain');

const bc = new Blockchain();

for (let i = 1; i<11; i++) {
    console.log(bc.addBlock(`foo ${i}`).toString());
}