<?php
?>
<html>
<head>
<style>
#t1
{
width:150px;
height:100px;
font-size:50px;
padding:30px;
background-color:blue;
border-radius:160px;
}
.t2{
margin:20px;
}
.t3{
margin:20px;
}
</style>
<script>
var t;
function startTime()
{
var isPaused=false;
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById("t1").innerHTML=h+":"+m+":"+s;
t=setInterval(startTime,1000);
}
function checkTime(i)
{
if(i<10)
{
i="0"+i;
}
return i;
}
function stop()
{
clearInterval(t);
}
</script>
</head>
<body>
<a href="logout.php"><h1>logout</h1></a>
<div id="t1">
</div>
<input type="submit" class="t2" value="start" onClick="startTime()">
<input type="submit" class="t3" value="stop" onClick="stop()">
now the quiz is begin</h1>
<h2>there are 10 question in these quiz if you give 8 correct answer you will be selected and you have 15 min for all these questions</h2>
<h1>1.what is the error in these code</h1>
import java.io.*;<br>
import java.File.*;<br>
class Demo<br>
{<br>
Demo<br>
{<br>
Thread th1=new Thread(new Read());<br>
th1.start();<br>
}<br>
public class Read extends Thread<br>
{<br>
public void run()<br>
{<br>
File f=new File();<br>
f.createNewFile();<br>
OutputStream out=new OutputStream();<br>
InputStream in=new InputStream();<br>
if(f.exists())<br>
{<br>
String s="computer";<br>
char ch[]=s.tocharArray();<br>
for(int i=0;i<s.length();i++)<br>
out.write(char[i]);<br>
}<br>
else<br>
{<br>
String s="computer";<br>
in.read(s.getBytes());<br>
in.flush();<br>
byte b[]=new byte[100];<br>
in.read(b);<br>
String s=new String(b);<br>
out.setText();<br>
}<br>
public static void main(String a[])<br>
{<br>
Demo d=new Demo();<br>
}<br>
<h1>Ans</h1><ul type="circle">
<li>s.getbytes()</li><br>
<li>s.toCharArray()</li><br>
<li>f.Exists()</li><br>
<li>none of these</li><br>
</ul>
<h1>2.write the output of these code</h1><br>
consider an html page where one label name=l and one textbox name=t contain=" hello " is available<br>
import javax.servlet.*;<br>
import javax.servlet.http.*;<br>
import javax.servlet.annotation.*;<br>
public class DemoServlet extends HttpServlet
<br>
public void service(HttpServletRequest req,HttpServletResponse res)<br>
{<br>
String s=req.getParameter("t");</br>
OutputStream out=res.getOutputStream();<br>
out.write("<html>+s.getBytes().trim()+</html>");
}<br>
}<br>
<h1>3.write error of following code</h1><br>
class Student<br>
{<br>
int age;<br>
String name="java";<br>
static void fn()<br>
{<br>
System.out.println(age);<br>
System.out.println(name);<br>
}</br>
public static void main(String a[])<br>
{<br>
Student s=new Student();<br>
s.fn();</br>
}</br>
}</br>
<h1>4.output of the following code</h1><br>
class Demo<br>
{<br>
Demo(int n)<br>
{<br>
System.out.println("demo");<br>
}<br>
Demo()<br>
{<br>
System.out.println("demo()");<br>
}<br>
}<br>
class Demo1 extends Demo<br> 
{<br>
Demo1()<br>
{<br>
System.out.println("demo1()");<br>
}<br>
Demo1(int n)<br>
{<br>
System.out.println("demo1");<br>
}<br>
public static void main(String a[])<br>
{<br>
Demo1 d=new Demo1();<br>
}<br>
}<br>
<h1>5.find output of the following code</h1><br>
import java.util.*;<br>
class Scan<br>
{<br>
public static void main(String a[])<br>
{<br>
Scanner sc=new Scanner(System.in);<br>
System.out.println("enter five number");<br>
int x=sc.nextInt();<br>
int y=sc.nextInt();<br>
int z=sc.nextInt();<br>
int w=sc.nextInt();<br>
int u=sc.nextInt();<br>
int a[]=new int[5];<br>
for(int i=0;i<3;i++)<br>
{<br>
System.out.println(a[i]);<br>
}<br>
}<br>
}<br>
<h1>6.write output of the following code</h1><br>
class Output<br>
{<br>
static int x=5;<br>
void fn()<br>
{<br>
x++;<br>
}<br>
void fn1()<br>
{<br>
x=x+2;<br>
}<br>
void display()<br>
{<br>
System.out.println(x);<br>
}<br>
public static void main(String a[])<br>
{<br>
Output o=new Output();<br>
Output o1=new Output();<br>
Output o2=new Output();<br>
o.fn();<br>
o.fn1();<br>
o1.fn();<br>
o.fn1();<br>
o.display();<br>
o1.display();<br>
}<br>
}<br>
<h1>7.find error in the following code</h1><br>
import java.awt.event.*;<br>
import javax.swing.*;<br>
import java.awt.*;<br>
class Gui implements ActionListener<br>
{<br>
Gui()<br>
{<br>
JFrame f=new JFrame("new Browser");<br>
f.setVisible(true);<br>
JLabel l=new JLabel("write something");<br>
JTextField t=new JTextField(30);<br>
JComboBox cb=new JComboBox();<br>
JButton b=new JButton("ok");<br>
Panel p=new Panel();<br>
p.add(l);<br>
p.add(t);<br>
p.add(ch);<br>
p.add(b);<br>
f.add(p);<br>
b.addActionListener(this);<br>
}<br>
public void actionPerformed(ActionEvent e)<br>
{<br>
String s=t.getText();<br>
ch.addItem(s);<br>
t.setText("");<br>
}<br>
}<br>
<h1>8.the correct statement is?</h1><br>
<h2>in java! statement interface ddl query is?</h2><br>
1.boolean execute("");<br>
2.int execute update("");<br>
3.result set query("");<br>
4.none of these;<br>
<h1>9.write the output of the following code</h1><br>
class call<br>
{<br>
public void callmMe(String s)<br>
{<br>
System.out.println("hello"+s);<br>
try<br>
{<br>
th.sleep(1000);<br>
}<br>
catch(Exception e)<br>
{}<br>
System.out.println("hello"+s);<br>
}<br>
}<br>
class Demo extends Thread<br>
{<br>
String s;<br>
Demo(String s)<br>
{<br>
this.s=s;<br>
Thread th=new Thread(this);<br>
th.start();<br>
}<br>
public void run()<br>
{<br>
Call c=new Call();<br>
c.callMe(s);<br>
}<br>
public static void main(String a[])<br>
{<br>
Call c=new Call();<br>
Demo d1=new Demo("java");<br>
Demo d2=new Demo("phython");<br>
}<br>
}<br>
<h1>10 . write output of the following code </h1><br>
import java.io.*;<br>
import javax.servlet.*;<br>
import javax.servlet.http.*;<br>
class Demo<br>
{<br>
public static vpid main(String a[])<br>
{<br>
public void service(HttpServletRequest req,HttpServletResponse res)<br>
{<br>

string str=req.getParameter("txt1");<br>
Cookie ck=new Cookie("ck1",str);<br>
res.addCookie(ck);<br>
ck1.setComment("cookie available here");<br>
result="";<br>
if(req.getCookies()!=null)<br>
{<br>
cookie[] ck2=new Cookies();<br>
for(int i=0;i<cookies.length();i++)<br>
{<br>
result=cookies[i].getValue();<br>
}<br>
Printwriter pw=req.getWriter();<br>
pw.println(result);<br>
}<br>
}<br>
<script>
countDown();
</script>
</body>
</html>