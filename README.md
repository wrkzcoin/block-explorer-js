# WrkzCoin-Blockchain-Explorer
Block explorer for WrkzCoin CryptoNote based cryptocurrency.

#### Installation

1) It takes data from daemon Wrkzd. It should be accessible from the Internet. Run Wrkzd with open port as follows:
```bash
./Wrkzd --enable-cors="*" --enable_blockexplorer --rpc-bind-ip=0.0.0.0 --rpc-bind-port=17856
```
2) Just upload to your website and change 'api' variable in config.js to point to your daemon.


### Development
Donate: [Wrkz] WrkzRNDQDwFCBynKPc459v3LDa1gEGzG3j962tMUBko1fw9xgdaS9mNiGMgA9s1q7hS1Z8SGRVWzcGc8Sh8xsvfZ6u2wJEtoZB

### Note

A lot of this code is from the great Karbovanets/Karbowanec-Blockchain-Explorer & turtlecoin/block-explorer
