a = 1
b = 2
sum = lambda x,y : x + y
c = sum(a,b)
print(c)

print("------------------------")

l = [2,4,7,3,14,19,8,9]
for i in l: print(i % 2 == 1)

print("------------------------")

for i in l:
    my_lambda = lambda x : (x % 2) == 1
    print(my_lambda(i))
