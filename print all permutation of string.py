def per(a,l,r):
	if l==r:
		print a
	else:
		for i in range(l,r+1):
			a[i],a[l]=a[l],a[i]
			per(a,l+1,r)
			a[i],a[l]=a[l],a[i]
s="gau"
l=len(s)
per(list(s),0,l-1)