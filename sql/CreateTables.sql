-- Create Users table

 create table users(id integer primary key, name varchar(100) unique NOT NULL CHECK (name <> ''),password varchar(100) NOT NULL CHECK (password <> ''),
 firstname varchar(100) NOT NULL CHECK (firstname <> ''), lastname varchar(100)  NOT NULL CHECK (name <> ''), isAdmin boolean DEFAULT(false) ,lastlogin timestamp );

-- Insert Users table

insert into users(name,password,firstname,lastname,isAdmin,lastlogin) values('ash','ash','Ashutosh','Singh',true,'2004-10-19 10:23:54');

Create table services(id integer primary key ,url varchar(100) unique NOT NULL CHECK (url <> ''),title varchar(100) ,subtitle varchar(100),img varchar(200), description varchar(5000),total_ratings numeric DEFAULT 0,no_ratings int DEFAULT 0);

insert into services(id,url,title,subtitle,img,description) values(1,'customwebsites.php','CUSTOM WEBSITES','We love to create what you imagine','codewarriors.herokuapp.com/img/portfolio/treehouse.png','Our strength lies in profound knowledge, expertise and working experience in application development and technology solutions using latest technologies, frameworks and platforms such as Microsoft.Net, Microsoft SQL, Windows Azure, Cross Platform Mobile Application, Java technology, and many others. Apart from application development, we also provide wide range of IT services including System Integration, Business Process Outsourcing and Staff Augmentation Services.');


insert into services(id,url,title,subtitle,img,description) values(2,'consulting.php','IT SOFTWARE CONSULTING SERVICES','Customer needs are kept before technical challenges','codewarriors.herokuapp.com/img/portfolio/treehouse.png','We provide Database Design, Class and Interface Design, Consulting in selection of Suitable Framework and Technology, Inter-application Communication Strategies, Open Source System, General System Architecture, and tools to solve problems. Our System Audit helps client’s business to identify design flaws through suggestion of remedies.');


insert into services(id,url,title,subtitle,img,description) values(3,'reporting.php','DATA WAREHOUSING AND REPORTS','A picture says a thousand words','codewarriors.herokuapp.com/images/reports.jpg','We offer high valued reports using latest technolgies. We have prepared reporting services for the biggest companies in the world including Microsoft, Apple, Google Tesla, Yahoo and LinkedIn. We use the latest standards and make sense of your information even though it may be huge.');


insert into services(id,url,title,subtitle,img,description) values(4,'seo.php','SEO','If you cant google it, it doesnt exist','codewarriors.herokuapp.com/images/seo.png','Our Consultancy SEO services provide research, analysis and recommendations for all websites, but especially for those having difficulty with their Search Engine visibility.');


insert into services(id,url,title,subtitle,img,description) values(5,'applicationdev.php','APPLICATION DEVELOPMENT','Automate what can be automated','codewarriors.herokuapp.com/img/portfolio/treehouse.png','As every problem is unique to the proposed business, the solution for the same needs to be unique too. We provide custom software development to our clients that are highly reliable and relevant to their needs. The process GOAL is to help our clients perceive and realize the most optimal technology solutions. To achieve this goal in addition to understanding their business processes, requirements and goals, we also pay attention to the organization’s culture and values, during our business study.');

insert into services(id,url,title,subtitle,img,description) values(6,'support.php','MAINTENANCE AND SUPPORT','The support you can count on','codewarriors.herokuapp.com/images/support.jpg','We offer a range of specialised services to help you maintain continuous service (24x7) and achieve your desired business outcomes without compromising on quality while adhering to your time and budget constraints.');

insert into services(id,url,title,subtitle,img,description) values(7,'mobiledev.php','MOBILE DEVELOPMENT','Mobile is the way of the future','codewarriors.herokuapp.com/images/mobile.jpg','With a rare mix of domain knowledge, technology, project management experts and expertise in Application Development & Technology Solutions, we bring in a dedicated team to work on each project with excellence.');


insert into services(id,url,title,subtitle,img,description) values(8,'bpo.php','BPO SERVICES','Support till the end','codewarriors.herokuapp.com/img/portfolio/treehouse.png','At our BPO Services division, you get an inspired team, of skilled professionals, working for you 24x7x365 thereby freeing up your bandwidth to focus on realizing your strategic business objectives. We are a global service provider offering advanced business process outsourcing services to several organizations. With domain and process-specific knowledge of the business, we ensure availability of well-defined BPO Processes and staying well-aligned with On-shore teams. Our continuous focus on the customer, use of robust technology tools, and effective communication and escalations at the right time helps us to serve our customers better with 24/7 support. We strongly believe in workflow-orientation and continual improvisations.');

insert into services(id,url,title,subtitle,img,description) values(9,'training.php','SOFTWARE TRAINING','Learn while having fun','codewarriors.herokuapp.com/images/networkadmin.jpg','Develop and refine the skills needed to successfully work with networks at a variety of levels, including design, implementation, and troubleshooting. Areas of expertise include data center, network security, networking, storage, and more.');


insert into services(id,url,title,subtitle,img,description) values(10,'webgamedev.php','WEB GAMES DEVELOPMENT','HTML5 rocks','codewarriors.herokuapp.com/images/html5.jpg','Develop and refine the skills needed to successfully work with networks at a variety of levels, including design, implementation, and troubleshooting. Areas of expertise include data center, network security, networking, storage, and more.');

insert into services(id,url,title,subtitle,img,description) values(11,'pcgamedev.php','PC GAME DEVELOPMENT','Nothing is better than native','codewarriors.herokuapp.com/images/pcgame.jpg','Developers can range in size from small groups making casual games to housing hundreds of employees and producing several large titles. Companies divide their subtasks of games development. Individual job titles may vary; however, roles are the same within the industry.The development team consists of several members.Some members of the team may handle more than one role; similarly more than one task may be handled by the same member. Team size can vary from 20 to 100 or more members, depending on the games scope. The most represented are artists, followed by programmers, then designers, and finally, audio specialists, with two to three producers in management. These positions are employed full-time. Other positions, such as testers, may be employed only part-time.Salaries for these positions vary depending on both the experience and the location of the employee. An entry-level programmer can make, on average, around $70,000 annually and an experienced programmer can make, on average, around $125,000 annually.');
