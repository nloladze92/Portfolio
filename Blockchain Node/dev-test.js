/*
const Blockchain = require('./blockchain');

const bc = new Blockchain();

for (let i = 1; i<11; i++) {
    console.log(bc.addBlock(`foo ${i}`).toString());
}
*/

const Wallet = require('./wallet');
const wallet = new Wallet();
console.log(wallet.toString());