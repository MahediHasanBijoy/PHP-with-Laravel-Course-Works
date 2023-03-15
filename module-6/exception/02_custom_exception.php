<?php

class MyException extends Exception{}
class NetworkException extends Exception{}

function checkException(){
    // throw new MyException();
    // throw new NetworkException();
    throw new Exception();
}

try{
    checkException();
}catch(MyException $e){
    echo "MyException caught";
}catch(NetworkException $e){
    echo "NetworkException caught";
}catch(Exception $e){
    echo "Exception caught";
}