import web3 from './web3';
import CampaignFactory from './build/CampaignFactory.json';

const instance = new web3.eth.Contract (
  JSON.parse(CampaignFactory.interface),
  '0x575AF46f85934dCdab0D3B45a40e4d033f5067BC'
);

export default instance;
