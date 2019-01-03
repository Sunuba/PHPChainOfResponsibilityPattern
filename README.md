# Chain of Responsibility Pattern

The intent in this pattern is to decouple sender and receiver. If you have a nested
ifs checking logic in a row, it could be a good idea to use chain of responsibility
pattern. Let's assume that we are writing a software for ATM to handle money.
For example, a person comes to an ATM and want to get cash amount of 125, currency
is not important at this time. We have the following nominal inside ATM or any other 
exchange types. We will apply Strategy Pattern here in order to switch between exchange types
without changing anything inside Client class. So, nominal values are:

- 100
- 50
- 20
- 10
- 5
- 1

We now will use chain of responsibility to give cash to the client.

First, we will distribute the total amount into pieces. To do this we create an ATM class 
where we will keep all the numbers for each nominal. ATM has a distribute method, 
this method simply divides all amount into possible nominal values. 

 For example:

    $money = new ATM(99); #We want 99 in cash, so we entered 99 to the ATM
    $money->distribute(); #We pressed confirm button and ATM distributed the money into nominals
    $client = new Client($money); #We join the client with the money
    $client->getDistributedMoney (); # Show us what nominals we will get.
Result will be:

    res\Client Object
    (
        [distributedMoney] => res\ATM Object
            (
                [money:res\ATM:private] => 99
                [hundreds:res\ATM:private] => 0
                [fifties:res\ATM:private] => 1
                [twenties:res\ATM:private] => 2
                [tens:res\ATM:private] => 0
                [fives:res\ATM:private] => 1
                [ones:res\ATM:private] => 4
            )
    
    )

1*50+2*20+1*5+4*1 = 50+40+5+4 = 99. So, it works perfectly.

Now, we will try to implement chain of responsibility. For each nominal value, we have a class:

    $give100 = new Give100();
    $give50 = new Give50();
    $give20 = new Give20();
    $give10 = new Give10();
    $give5 = new Give5();
    $give1 = new Give1();

Each class implements CashHandler abstract class. CashHandler class handles the queue.

Now, as we are done with the coding we can get a cash from ATM:

    $money = new ATM(99);
    $money->distribute ();
    $client = new Client($money);
    
    $give100 = new Give100();
    $give50 = new Give50();
    $give20 = new Give20();
    $give10 = new Give10();
    $give5 = new Give5();
    $give1 = new Give1();
    
    # This is where chain is happening
    $give100->setSuccessor ($give50);
    $give50->setSuccessor ($give20);
    $give20->setSuccessor ($give10);
    $give10->setSuccessor ($give5);
    $give5->setSuccessor ($give1);
    
    
    # This is where chain is starting
    $give100->give ($money);

The result will be:

    Give 1 50 in cash 
    Give 2 20 in cash 
    Give 1 5 in cash 
    Give 4 1 in cash

Sum is 99

If we request 158:
    
    $money = new ATM(158);
    ...

The result will be:

    Give 1 100 in cash 
    Give 1 50 in cash 
    Give 1 5 in cash 
    Give 3 1 in cash 
    
Sum is 158

Also, in the future it is possible that a client may want to exchange money from different
sources such as bank branches. May be in the bank branches they do not give 50 nominals 
(let's assume something like this.) or they have a certain pattern for exchange. Then you can
implement your own exchange service by implementing ExchangeInterface interface. In our example
BankBranch does not give 50 nominals so when you use it like this: `$money = new BankBranch(99);`
it will give you money in the following way:

    Give 4 20 in cash 
    Give 1 10 in cash 
    Give 1 5 in cash 
    Give 4 1 in cash 

As we do not have 50 nominal value in the bank, we will get 4 20 nominal values and so on.

In `$money = new ATM(99);` The result will be the following:

    Give 1 50 in cash 
    Give 2 20 in cash 
    Give 1 5 in cash 
    Give 4 1 in cash 

Just implement ExchangeInterface and create your own exchange service.

Thanks.

