ArrayUtf8Encoder
================

#Description of each function
This is a simple calss that helps you to convert arrays to utf8 then to JSON.
Many of us encountred the same problems when you want to parse an array converted to JSON you counter 'StdClass' that makes the way you are parsing that array harder.
Here I have used to code some functions to help me get a simple JSON array.

###The first function 'utf8_converter' get a parameter as an array: 
this function will detect if there is any data (item) that is not coded in utf8 and then convert is and return your array which now will contain a utf8 data.

###The second function 'arrayToSimple' get as parameters two arrays: 
the first one that contains your data and the second one will contain the fields to use in JSON object to simplify parsing for you. (NOTE: this function can be used only for arrays which are inside another array.)

###The last function is the one that will help you more 'objectToArray' get as parameter an array: 
this function will convert the StdClass object to a simple array so when you encode it to JSON it will be easier to parse.

