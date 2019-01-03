import web3 from './web3';
import CampaignFactory from './build/CampaignFactory.json';

const instance = new web3.eth.Contract (
  JSON.parse(CampaignFactory.interface),
  '0x15960D93Cc5E448806698719E1a717bcbd931361'
);

export default instance;
