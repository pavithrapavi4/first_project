var=(1,2,3,4,5)
print(len(var))
print(type(var))
print(var[1])
print(var[-2])
var1=('apple','banana','cherry','orange')
print(var1[2:4])
print(var1[2:])
print(var1[:3])

if "cherry" in var1:
    print("yes")

var2=list(var1)
var2[2]="blackcurrent"
var2.append('jackfruits')
print(var2)
print(type(var2))
var2=tuple(var1)
print(type(var2))
y=("mango",)
y=list(var2)
print(type(y))
#var3="7"/"7"
#print(var3)
fruits = ("apple", "banana", "cherry", "strawberry", "raspberry")

(green, *yellow, red) = fruits

print(green)
print(yellow)
print(red)


