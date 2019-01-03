//0x575AF46f85934dCdab0D3B45a40e4d033f5067BC
const HDWalletProvider = require('truffle-hdwallet-provider');
const Web3 = require('web3');
const compiledFactory = require('./build/CampaignFactory.json');

const provider = new HDWalletProvider(
  'foster repeat base excess parent develop deer stomach harvest door step angry',
  'https://rinkeby.infura.io/v3/03822c73c74d471bbe30f2039ba737dd'
);

const web3 = new Web3(provider);

const deploy = async () => {
  const accounts = await web3.eth.getAccounts();

  console.log('Attempting to deploy from account', accounts[0]);

  const result = await new web3.eth.Contract(JSON.parse(compiledFactory.interface))
  .deploy( { data: compiledFactory.bytecode } )
  .send( { gas: '1000000', from: accounts[0]} );

  console.log('Contract deployed to', result.options.address);
}
deploy();
