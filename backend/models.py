from django.db import models as m

# Create your models here.
class Notice(m.Model):
  title = m.CharField(max_length=1000, verbose_name="Title")
  
  def __str__(self):
    return self.title[:10]+"...."
    
class Video(m.Model):
  video = m.CharField(max_length=1000, verbose_name="Youtube embedded tag")
  
class Register(m.Model):
  name = m.CharField(max_length=50, verbose_name="Full name")
  phn = m.CharField(max_length=11, verbose_name="Phone no.")
  mail = m.EmailField(verbose_name="Email address")
  pwd = m.CharField(max_length=30, verbose_name="Password")
  
  def __str__(self):
    return self.name