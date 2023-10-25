sentence = "the quick brown fox jumps over the lazy dog" 
words = sentence.split() # split the sentence into words
word_lengths = [] # create an empty list

for word in words: # loop through the list
      if word != "the": # if the word is not "the"
          word_lengths.append(len(word)) # append the length of the word to the list

word_lengths2 = [len(word) for word in words if word != "the"]

print(words) # print the list
print(word_lengths) # print the list
print(word_lengths2) # print the list

print("------------------------")

numbers = [34.6, -203.4, 44.9, 68.3, -12.2, 44.6, 12.7]

newlist = [numbers for numbers in numbers if numbers > 0]

print(newlist)

