//Nikcons ICO

pragma solidity ^0.4.11;

contract nikcoin_ico {
    // introducing the max num of nikcoins available for sale
    uint public max_nikcoins = 1000000;
    
    // conversion rate USD to nikcoins
    uint public usd_to_nikcoins = 1000;
    
    // Introducing the total nuber of nikcoins that have been bought by the investors
    uint public total_nikcoins_bought = 0;
    // Mapping the investor address to it's equity in Hadcoins
    mapping(address => uint) equity_nikcoins;
    mapping(address => uint) equity_usd;
    
    // Checking if an investor can buy nikcoins
    modifier can_buy_nikcoins(uint usd_invested) {
        require (usd_invested * usd_to_nikcoins + total_nikcoins_bought <= max_nikcoins);
        _;
    }
    
    // Getting the equity in Nikcoins of an investor
    function equity_in_nikcoins(address investor) external constant returns (uint) {
        return equity_nikcoins[investor];
       
    }
     // Getting the equity in USD of an investor
    function equity_in_usd(address investor) external constant returns (uint) {
        return equity_usd[investor];
       
    }
    
    // Buying Nikcoins
    function buy_nikcoins(address investor, uint usd_invested) external 
        can_buy_nikcoins(usd_invested) {
            uint nikcoins_bought = usd_invested * usd_to_nikcoins;
            equity_nikcoins[investor] += nikcoins_bought;
            equity_usd[investor] = equity_nikcoins[investor] / 1000;
            total_nikcoins_bought += nikcoins_bought;
        }
        
    // Selling nikcoins
    function sell_nikcoins(address investor, uint nikcoins_sold) external {
            equity_nikcoins[investor] -= nikcoins_sold;
            equity_usd[investor] = equity_nikcoins[investor] / 1000;
            total_nikcoins_bought -= nikcoins_sold;
        }
    
    
    }