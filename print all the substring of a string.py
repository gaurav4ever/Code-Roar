s="gaurav"
length=len(s)
k,i=0,0
a=list()
a.append(s)
while(i<=length):
	while(k<=length):
		if bool(s[i:k] in a)==False:
			a.append(s[i:k])
			# print s[i:k]
		k=k+1
	i=i+1
	k=i+1
print a