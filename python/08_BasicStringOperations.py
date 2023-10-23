astring = "Hello world!"
print("single quotes are ' '")

# This prints out the length of the string
print(len(astring))
# That prints out 4, because the location of the first occurrence of the letter "o" is 4 characters away from the first character
print(astring.index("o"))
# This prints out the number of occurrences of the letter "l"
print(astring.count("l"))
# This prints out the characters from 3 to 7
print(astring[3:7])
# This prints the characters of string from 3 to 7 skipping one character. This is extended slice syntax. The general form is [start:stop:step].
print(astring[3:7:2])
# These make a new string with all letters converted to uppercase and lowercase, respectively.
print(astring.upper())
print(astring.lower())
# The first one will print True, as the string starts with "Hello". The second one will print False, as the string certainly does not end with "asdfasdfasdf".
print(astring.startswith("Hello"))
print(astring.endswith("asdfasdfasdf"))
# This splits the string into a bunch of strings grouped together in a list.
afewwords = astring.split(" ")
print(afewwords)
