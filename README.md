# Chain of Responsibility Pattern

The intent in this pattern is to decouple sender and receiver. If you have a nested
ifs checking logic in a row, it could be a good idea to use chain of responsibility
pattern. Let's assume that we are writing a software for ATM to handle money.
For example, a person comes to an ATM and want to get cash amount of 125, currency
is not important at this time. We have the following nominal inside ATM:

- 100
- 50
- 20
- 10
- 5
- 1

We now will use chain of responsibility to give cash to the client.

First, we will distribute the total amount into pieces. To do this we create a
DistributedMoney class where we will keep all the numbers for each nominal. Client has a 
pressToGetCash method, this method simply divides all amount into possible nominal values. For
example:

    $client = new Client(99);
    $client->pressToGetCash ();
    print_r ($client);
Result will be:

    res\Client Object
    (
        [moneyRequested:res\Client:private] => 99
        [distributedMoney] => res\DistributedMoney Object
            (
                [hundreds:res\DistributedMoney:private] => 0
                [fifties:res\DistributedMoney:private] => 1
                [twenties:res\DistributedMoney:private] => 2
                [tens:res\DistributedMoney:private] => 0
                [fives:res\DistributedMoney:private] => 1
                [ones:res\DistributedMoney:private] => 4
            )
    
    )

1*50+2*20+1*5+4*1 = 50+40+5+4 = 99. So, it works perfectly.

Now, we will try to implement chain of responsibility, the pattern will try to stack money
beginning from highest nominal value to the lowest one.



