# transactions
Financial transactions system

Composer used to implement the autoloading for the project.

Run the transaction operation by runing index.php file.

Getting account transactions sorted by date and comments by running the sorting.php file. 

Transactions type constants list
1. DEPOSIT
2. WITHDRAWAL
3. TRANSFER

Note: in case of DEPOSIT and WITHDRAW transactions the sender_id need to be null
Note: We have 2 JSON files in Database folder for saving data: accounts.json and transactions.json
Note: We have 3 Accounts in accounts.json file to implement transactions between them
Note: Change the variable values to see different transactions process

SOLID principles are used during creating of interfaces and classes.

For creatring of transaction process the Factory Design Pattern is used (see the Transactions folder).
The factory pattern is used to create transaction object each time when we calling one of the transactions.

In TransactionHelper.php file written the logic for running separately each transaction by calling exactly that class.
