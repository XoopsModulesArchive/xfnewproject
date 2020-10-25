<?php
global $type;
global $utype;

//$project = $_GET('post');

define('_XF_STEP1', '
<p>
Please name your ' . $type . '.
The "Full Name" should be descriptive of your ' . $type . ', and must be from 
3 to 60 characters in length.
</p>');

define('_XF_STEP2', "<P><b>
Please provide detailed, accurate description of your project,
what Novell Forge resources you plan to use, and in which way you plan to use them. This
description will be the basis for the approval or rejection of
your project's hosting on Novell Forge, and later, to ensure that
you are using the services in the intended way. This description
will not be used as a public description of your project. It must
be written in English.
</b><P>");

define('_XF_STEP3', "
<!--P><B><I>If you are applying for a website-only project, please
select \"website-only\" from the choices below and proceed.</I></B-->

<P>Although Novell Forge was created primarily to advance Open Source software development using Novell technology,
we welcome the interest of any Open Source projects.
To keep things simple, we are relying on the outstanding work
of the <A href=\"http://www.opensource.org\" target=\"_blank\" style=\"text-decoration: underline;\">Open Source Initiative</A>
for our licensing choices.

<P>We realize that there may be other licenses out there
that may better fit your needs. If you wish to use a license that is
not OSI Certified, please let us know why you wish to use another
license.

<P>Choosing a license is a serious decision. Please take some time
to <a href='http://www.opensource.org/licenses/' target='_blank' style='text-decoration: underline;'>read the text</a> of several licenses before
making a choice about your project.

<P>You may change the license for your project at a
later date, so long as you have a legal capability to do so, your file
release clearly relates this change, and your filemap categorization is
updated appropriately. <i>Please note that license changes are not
retroactive (i.e., do not apply to products already released under
OpenSource license).</i>

<P>Novell Forge is not responsible for legal discrepancies regarding
your license.");

define('_XF_STEP3A', '<P>
If you selected "other", please provide an explanation along
with a description of your license. Realize that other licenses may
not be approved. Also, it may take additional time to make a decision
for such project, since we will need to check that the proposed license is compatible and acceptable 
with the Open Source definition.</p>');

if ('community' != $type) {
    $desc = "It should not be as comprehensive and formal as the $utype purpose description (step 2), so f";
} else {
    $desc = 'F';
}

define('_XF_STEP4', '<p>
This is the description of your ' . $type . ' which will be shown on
the ' . $utype . ' Summary page, in search results, etc. 
 ' . $desc . 'eel free to use concise and catchy wording.
</p>');

if ('community' == $type) {
    $project = ' or project';
}
define('_XF_STEP5', '<p>
In addition to full ' . $type . ' name, you will also need to choose a "Short Name" name for your ' . $type . '.
</p>

<P> The "Short Name" has several restrictions because it is
used in so many places around the Forge site. Your ' . $type . ' short name:

<UL>
<LI>Cannot match the short name of any other ' . $type . ' ' . $project . '
<LI>Must be between 3 and 15 characters in length
<LI>Must be in lower case
<LI>Can only contain characters, numbers, and dashes
<LI>Must start with a letter
<LI>Cannot match any reserved Novell Forge name
<LI>Will never change for this ' . $type . '
</UL>');

define('_XF_REG_WELCOME1', "
<p>
Novell Forge offers a full suite of services for your hosted project(s). If
you haven't already, please be sure to browse the most recent revision of
these services.
</p>

<p>
<b>Use of Project Account</b>
</p>

<p>
The space provided to you on this server is given for the expressed purpose of
Open Source development or, in the case of web sites, the advancement of
Open Source. For more information, please read the Novell Forge Terms of
Service (\"Terms of Service\").
</p>

<p>
<b>Creative Freedom</b>
</p>

<p>
It is our intent to allow you creative freedom on your project. For our legal protection and yours, there are
limits. Details about these restrictions are described in the
Terms of Service.
</p>

<p>
<b>Advertisements</b>
</p>

<p>
You may not place any revenue-generating advertisements on the Novell Forge site.
</p>

<p>
<b>Open Source/Rights to Code</b>
</p>

<p>
You will be presented with a choice of Open Source approved licenses for
your project. You will still own the code, but these licenses also
allow us to make your code available to the general public. Although you may
choose to stop hosting your project with us at any time, the nature of these licenses
will allow us to continue to make your code available. Details about content
ownership are described in the Terms of Service.
</p>

<p>
If you wish to use another license that is not currently approved by the
Open Source Initiative, let us know and we will review these requests on a
case-by-case basis.
</p>

<p>
It is our intent to provide a permanent home for all versions of your code.
We do reserve the right, however, to terminate your project if there is due
cause, in accordance with the Terms of Service.
</p>");

define('_XF_REG_WELCOME2', "
1. ACCEPTANCE OF TERMS

A person's use of Novell Forge and any of its Services (as defined below) at
any time is subject to Novell Forge's then-current Terms of Service (\"TOS\"),
which may be updated from time to time as set forth below. Each user can
review the then-current TOS at any time at:
" . XOOPS_URL . "/modules/xfmod/tos/tos.php.  In addition, each user's use of
particular Services may be subject to specific guidelines or rules
(\"Service-specific Rules\") posted from time to time and incorporated by this
reference into the TOS.  A user's use of  Novell Forge and/or its Services
constitutes full acceptance of and agreement to the TOS; if a user does not
accept our TOS, he or she is not granted rights to use Novell Forge or any of
its Services, as defined herein, and should refrain from accessing
Novell Forge and its Services.

To update the TOS or any Service-specific Rules, we will both post the
changed version and its effective date at
" . XOOPS_URL . "/modules/xfmod/tos/tos.php.  Concurrently with any change to the
core TOS, we will email notice of the change to known users at least 15 days
(or such shorter or longer time as mandated by law or any judicial or
government body) in advance.  If we change any Service-specific Rules, we
will post the changed version on the location where those Service-specific
Rules normally appear,  reference the change on the primary page for that
Service and include a link to the previous version of the rules.

Novell Forge reserves the right at any time and from time to time to modify
or discontinue, temporarily or permanently, Novell Forge or any Service
thereon (or any part thereof) with notice to users and the public as
described above, or immediately in the event of technical difficulties.
Novell Forge shall not be liable to any user or other third party for any
such modification, suspension or discontinuance except as expressly provided
herein.

2. DESCRIPTION OF SERVICE; NO WEB ACCESS

Novell Forge is a website owned and operated by Novell, Inc., for
the purpose of fostering software development and content creation under
Open-Source Initiative (\"OSI\")-approved licenses or other arrangements
relating to software and/or content development that may be approved by
Novell Forge (the \"Purpose\").  Novell Forge currently offers users access to a
rich collection of on-line resources for Open Source  software  development
and content creation, including various  communications tools, source code
control and project management tools, online forums, shopping services,
personalized content and branded programming through its network of
properties (collectively, the \"Services\").  To use the Services, each user
must independently obtain access to the World Wide Web, either directly or
through devices that access Web-based content, and pay any and all service
fees or equipment costs associated with such access.

3. REGISTRATION OBLIGATIONS

If required by the site in question, each user must: (a) provide true,
accurate, current and complete information on the Service's registration
form (collectively, the \"Registration Data\") and (b) maintain and promptly
update the Registration Data as necessary. If, after investigation, we have
reasonable grounds to suspect that any user's information is untrue,
inaccurate, not current or incomplete, we may suspend or terminate that
user's account and prohibit any and all current or future use of the
Services (or any portion thereof) by that user other than as expressly
provided herein.

Each user will receive a password and account designation upon completing
the Service's registration process and is wholly responsible for maintaining
the confidentiality thereof and wholly liable for all activities occurring
thereunder.    Novell Forge cannot and will not be liable for any loss or
damage arising from a user's failure to comply with this Section, including
any loss or damage arising from any user's failure to (a) immediately notify
Novell Forge of any unauthorized use of his or her password or account or any
other breach of security and (b) ensure that he or she exits from his or her
account at the end of each session.

Novell Forge handles user Registration Data in accordance with the
Novell Forge Privacy Policy accessible at
" . XOOPS_URL . "/modules/xfmod/tos/privacy.php.

4. CONTENT 

All information, data, text, software, music, sound, photographs, graphics,
video, messages or any other materials whatsoever (collectively, \"Content\"),
whether publicly posted or privately transmitted, are the sole
responsibility of the person from which such Content originated. This means
that the user, and not Novell Forge, is entirely responsible for all Content
that he or she uploads, posts, emails or otherwise transmits via Novell Forge
or any Service. No user shall transmit Content or otherwise conduct or
participate in any activities on Novell Forge and/or any Service which, in
the opinion of Novell Forge's counsel, are prohibited by law in applicable
jurisdictions, including laws governing the encryption of software, the
export of technology, the transmission of obscenity or the permissible uses
of intellectual property.

Novell Forge will not pre-screen or review Content, but Novell Forge reserves
the right to refuse or delete any Content of which it becomes aware which it
reasonably deems not to fulfill the Purpose. In addition, Novell Forge shall
have the right (but not the obligation) in its sole discretion to refuse or
delete any Content which it reasonably considers to violate the TOS or be
otherwise illegal.  Novell Forge, in its sole and absolute discretion, may
preserve Content and may also disclose Content if required to do so by law
or judicial or governmental mandate or as reasonably determined necessary by
us to protect the rights, property or personal safety of Novell Forge, its
users and the public. Novell Forge does not control the Content posted via
the Service and, as such, does not guarantee the accuracy, integrity or
quality of such Content. Under no circumstances will Novell Forge be liable
in any way for any Content, including, but not limited to, liability for any
errors or omissions in any Content or for any loss or damage of any kind
incurred as a result of the use of any Content posted, emailed or otherwise
transmitted via Novell Forge or any Service thereon.

Each user, by using Novell Forge or any Service, may be exposed to Content
that is offensive, indecent or objectionable.   Each user must evaluate, and
bear all risks associated with, the use of any Content, including any
reliance on the accuracy, completeness, or usefulness of such Content.

Licensing and Other Terms Applying to Code and Other Content Posted on
Novell Forge:

Use, reproduction, modification, and other intellectual property rights to
data stored in CVS or as a file release and posted by any user on
Novell Forge (\"Source Code\") shall be subject to the OSI-approved license
applicable to such Source Code, or to such other licensing arrangements that
may be approved by Novell Forge as applicable to such Source Code.

With respect to text or data entered into and stored by publicly-accessible
site features such as message boards and bug trackers (\"Novell Forge Public
Content\"), the submitting user retains ownership of such Novell Forge Public
Content; with respect to publicly-available statistical content which is
generated by the site to monitor and display project activity, such content
is owned by Novell Forge.  In each such case, the submitting user grants
Novell Forge the royalty-free, perpetual, irrevocable, non-exclusive and
fully sublicensable right and license to use, reproduce, modify, adapt,
publish, translate, create derivative works from, distribute, perform and
display such Content (in whole or part) worldwide and/or to incorporate it
in other works in any form, media, or technology now known or later
developed, all subject to the terms of any applicable Open Source
Initiative-approved license.

With respect to Content posted to private areas of Novell Forge, i.e.,
private Novell Forge development tools or Novell Forge Mail, the submitting
user may grant to Novell Forge or other users such rights and licenses as the
submitting user deems appropriate.

Content located on any Novell Forge-hosted subdomain which is subject to the
sole editorial control of the owner or licensee of such subdomain, shall be
subject to the OSI-approved license applicable to such Source Code, or to
such other licensing arrangements that may be approved by Novell Forge as
applicable to such Content.

5. NO RESALE OF SERVICE

You agree not to sell, resell or offer for any commercial purposes, any
portion of the Services, use of the Services or access to the Services.

6. GENERAL PRACTICES REGARDING USE AND STORAGE

Novell Forge may establish general practices and limits concerning use of the
Services, as defined by posted Service-specific Rules.  While Novell Forge
will use reasonable efforts to back up site data and make such data
available in the event of loss or deletion, Novell Forge has no
responsibility or liability for the deletion or failure to store any
messages and other communications or other Content maintained or transmitted
by any Service. Novell Forge reserves the right to mark as \"inactive\" and
archive accounts and/or projects that are inactive for an extended period of
time. Novell Forge reserves the right to change these general practices and
Service-specific Rules at any time, in its sole discretion, with notice to
users and the public as described in Section 1 above.

7. TERMINATION

A user's account may be terminated for reasons that include, but are not
limited to, the following:  1.) violation of these TOS;  2.) abuse of site
resources or attempt to gain unauthorized entry to the site or site
resources; 3.) use of Service in a manner inconsistent with the Purpose; 4.)
a user's request for such termination; and 5.) requirement of applicable
law, regulation, court or governing agency order.

Novell Forge's termination of any user's access to Novell Forge or any Service
hereunder may be effected without notice and, on such termination,
Novell Forge may immediately deactivate or delete user's account and/or bar
any further access to such files, that Service or Novell Forge.  Novell Forge
shall not be liable to any user or other third party for any termination of
that user's access or account hereunder.

Notwithstanding the foregoing, unless prohibited by law or judicial or
governmental order, Novell Forge shall make reasonable efforts to make
available all information in a user's account to that user prior to deleting
that account or marking that account \"inactive\", including emailing to the
affected user 15-days prior notice of such termination and the location of
such user's information, and retaining all information for at least 15 days
after  emailing such notice..

8. LINKS

Novell Forge, any Service or a third party may provide links to other
Websites.  Novell Forge exercises no control whatsoever over such other
Websites and Web-based resources and is not responsible or liable for the
availability thereof or the Content, advertising, products or other
materials thereon. Novell Forge shall not be responsible or liable, directly
or indirectly, for any damage or loss incurred or suffered by any user in
connection therewith.

9. INDEMNITY; DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY

Each user shall indemnify, defend and hold harmless each of Novell, Inc. and its affiliates and their respective officers, employees
and agents, and any of Novell's  website partners from any and all
claims or demands, including reasonable attorneys' fees, made by any third
party due to or arising out of that user's acts or omissions, including
claims arising out of that user's use of Novell Forge; his or her submission,
posting or transmission of Content or his or her violation of the TOS.

EACH USER'S USE OF THE SERVICE IS AT HIS OR HER SOLE RISK. THE SERVICE IS
PROVIDED ON AN \"AS IS\" AND \"AS AVAILABLE\" BASIS AND NOVELL FORGE ASSUMES NO
RESPONSIBILITY FOR THE TIMELINESS, DELETION, MIS-DELIVERY OR FAILURE TO
STORE ANY USER COMMUNICATIONS OR PERSONALIZATION SETTINGS.  EACH USER WILL
BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO HIS OR HER COMPUTER SYSTEM OR LOSS
OF DATA WHICH RESULTS FROM THE DOWNLOAD OF ANY SUCH MATERIAL.  NOVELL FORGE
EXPRESSLY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED,
INCLUDING, BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT.  SPECIFICALLY,
NOVELL FORGE MAKES NO WARRANTY THAT (i) NOVELL FORGE OR ANY SERVICE WILL MEET
YOUR REQUIREMENTS, (ii) ANY USER ACCESS WILL BE UNINTERRUPTED, TIMELY,
SECURE OR ERROR-FREE, (iii) THE QUALITY OF ANY CONTENT, PRODUCTS, SERVICES,
INFORMATION OR OTHER MATERIAL OBTAINED BY ANY USER WILL MEET HIS OR HER
EXPECTATIONS, AND (iv) ANY ERRORS IN THE SOFTWARE WILL BE CORRECTED.

EXCLUDING ONLY DAMAGES ARISING OUT OF NOVELL'S GROSS NEGLIGENCE OR
WILLFUL MISCONDUCT, NOVELL, INC. SHALL NOT BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES,
INCLUDING BUT NOT LIMITED TO DAMAGES FOR LOSS OF PROFITS, GOODWILL, USE,
DATA OR OTHER INTANGIBLE LOSSES (EVEN IF NOVELL HAS BEEN ADVISED
OF THE POSSIBILITY OF SUCH DAMAGES), RESULTING FROM ANY USER'S USE OR
INABILITY TO USE THE SERVICE; THE COST OF PROCUREMENT OF SUBSTITUTE
SERVICES; UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR TRANSMISSIONS OR
DATA; STATEMENTS OR CONDUCT OF ANY THIRD PARTY ON THE SERVICE; OR ANY OTHER
MATTER RELATING TO NOVELL FORGE OR ANY SERVICE.  IN NO EVENT SHALL NOVELL'S
TOTAL CUMULATIVE LIABILITY TO ANY USER OR OTHER PARTY UNDER THESE
TERMS OF SERVICE OR OTHERWISE EXCEED \$1,000.00.

SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN WARRANTIES OR THE
LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL
DAMAGES. ACCORDINGLY, SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU.

NOTHING HEREIN SHALL BE DEEMED TO CREATE AN AGENCY, PARTNERSHIP, JOINT
VENTURE, EMPLOYEE-EMPLOYER OR FRANCHISOR-FRANCHISEE RELATIONSHIP OF ANY KIND
BETWEEN NOVELL AND ANY USER OR OTHER PERSON OR ENTITY NOR DO THESE
TERMS OF SERVICE EXTEND RIGHTS TO ANY THIRD PARTY.  AS NOTED ABOVE, NOVELL
DOES NOT AND CANNOT CONTROL THE ACTIONS OF NOVELL FORGE USERS,
VISITORS OR LINKED THIRD PARTIES.  WE RESERVE THE RIGHT TO REPORT ANY
MALFEASANCE WHICH COMES TO OUR ATTENTION TO THE APPROPRIATE AUTHORITIES.
WE DO NOT GUARANTEE CONTINUOUS UNINTERRUPTED OR SECURE ACCESS TO NOVELL FORGE
OR ANY SERVICES.  OPERATION OF THE WEBSITE MAY BE SUBJECT TO INTERFERENCE
FROM NUMEROUS FACTORS OUTSIDE OUR CONTROL.  FURTHER, SCHEDULED AND
PREVENTIVE MAINTENANCE AS WELL AS REQUIRED AND EMERGENCY MAINTENANCE WORK
MAY TEMPORARILY INTERRUPT SERVICES OR ACCESS TO THE WEBSITE. THE DISCLAIMERS
OF WARRANTY AND LIMITATIONS OF LIABILITY APPLY, WITHOUT LIMITATION, TO ANY
DAMAGES OR INJURY CAUSED BY THE FAILURE OF PERFORMANCE, ERROR, OMISSION,
INTERRUPTION, DELETION, DEFECT, DELAY IN OPERATION OR TRANSMISSION, COMPUTER
VIRUS, COMMUNICATION LINE FAILURE, THEFT OR DESTRUCTION OR UNAUTHORIZED
ACCESS TO, ALTERATION OF OR USE OF ANY ASSET, WHETHER ARISING OUT OF BREACH
OF CONTRACT, TORTIOUS BEHAVIOUR, NEGLIGENCE OR ANY OTHER COURSE OF ACTION BY
NOVELL, INC.

10. TRADEMARK INFORMATION

Novell Forge, the Novell Forge logo and other Novell Forge trademarks, service
marks, and product and service names are trademarks of Novell, Inc.
(the \"Novell Forge Marks\").  Novell is a trademark of Novell, Inc.
All other marks are property of their respective owners.  Users may display or use the
Novell Forge Marks in only in accordance with Novell's Trademark Use Guidelines.

11. COPYRIGHTS

Novell Forge respects the intellectual property of all parties and we ask our
users to do the same.  If a user or other third party believes that its
Content has been copied in a way that constitutes copyright infringement,
that user or third party should provide Novell Forge with the following
information:  (a) an electronic or physical signature of the person
authorized to act on behalf of the owner of the copyright interest; (b) a
description of the copyrighted work that has been infringed; (c) a
description of where the allegedly infringing material is located on the
Website; (d) the affected user or third party's  address, telephone number
and email address; (e) a statement by the affected user or third party that
he or she has a good faith belief that the disputed use is not authorized by
the copyright  owner, its agent or the law; and (f) a statement by the
affected user or third party, under penalty of perjury, that the above
information is accurate and that such user or third party is the copyright
owner or is otherwise authorized to act on the copyright owner's behalf.  If
Novell Forge receives such a claim, Novell Forge reserves the right to refuse
or delete Content as described under Section 4 hereto, or to terminate a
user's account in accordance with Section 7.

12. GENERAL INFORMATION

The TOS constitute the entire agreement between each user and Novell,
Inc. and govern each user's use of the Service, superceding any
prior agreements. Each user may be subject to additional terms and
conditions that may apply when that user uses affiliate services, third
party content or third party software. The TOS and the relationship between
each user and Novell shall be governed by the laws of the State of
Utah without regard to its conflict of law provisions and each party
shall submit to the personal and exclusive jurisdiction of the courts
located within the county of Utah, Utah. If any provision of
the TOS is found by a court of competent jurisdiction to be invalid, the
parties nevertheless agree that the court should endeavor to give effect to
the parties' intentions as reflected in the provision, and the other
provisions of the TOS remain in full force and effect.

13. VIOLATIONS

Please report any violations of the TOS, any alleged copyright infringements
or any other matters to the Novell Forge Support Manager at
forge@novell.com.

Novell and Novell Forge are trademarks of Novell, Inc.
All other trademarks and copyrights on this page are property of their respective owners.
For information about other Content of this page, please see the Terms of
Service governing usage of this site at " . XOOPS_URL . '/modules/xfmod/tos/tos.php.
For Novell Forge privacy policy information, please see
' . XOOPS_URL . '/modules/xfmod/tos/privacy.php. Content owned by Novell is
copyright 2004 Novell, Inc.  All rights reserved.');

define('_XF_REG_AGREE', 'By clicking below, you acknowledge that you have read 
and understand the Terms of Service agreement. Clicking "I AGREE" will
constitute your legal signature on this document.');

define('_XF_REG_WELCOME', "
<p>
Novell Forge would like to extend an invitation to host the
<A href=\"http://www.opensource.org\" target=\"developer\">Open Source</A> project(s) of any interested developer for no price and
with no catch.
</p>

<p><B>The Process</B>

<p>
Registering a project with Novell Forge is an easy process, but we do require
a reasonable amount of information in order to automate things 
as much as possible and present your project(s) adequately. Registering 
project consists of the three steps:
<ol>
<li>Submitting a request
<li>Approval of the request
<li>Setting up your project's account
</ol>
</p>

<p>
Currently, you are going to proceed with the first step of the 
process. It should take about 10 minutes. After that, please allow 
several days for our review of the request. If it complies 
with our requirements for hosting (see the next step), your 
project will be approved, and you will receive e-mail 
with directions for future steps.
</p>

<p>
During signup, we will present you with some legal documents 
regarding your account with us. Please do not
ignore these; they are very important to you and your project.
</p>");

// projectinfo.php
define('_XF_REG_INVALIDFULLNAME', 'Invalid Full Name');
define('_XF_REG_INVALIDUNIXNAME', 'Invalid Short Name');
define('_XF_REG_UNIXGROUPALREADYTAKEN', 'Group short name already taken');
define('_XF_REG_DESCRIBEREGISTRATION', 'Please describe your registration purpose in a more comprehensive manner');
define('_XF_REG_DESCRIBEPROJECT', 'Please use more comprehensive ' . $utype . ' description');
define('_XF_REG_NOLICENSECHOSEN', 'You have not chosen a license');
define('_XF_REG_CONFLICTLICENSE', 'Conflicting licenses choice');
define('_XF_REG_DESCRIBELICENSE', 'Please give more comprehensive licensing description');
define('_XF_REG_ISSUBMITTED', 'Your ' . $type . ' has been submitted to the Novell Forge admininstrators. Within 72 hours, you will receive decision notification and further instructions.');
define('_XF_REG_ISACTIVATED', 'Your ' . $type . ' has been successfully activated. You can visit your ' . $type . ' page at this location');
define('_XF_REG_THANKYOU', 'Thank you for choosing Novell Forge.');
define('_XF_REG_PROJECTSTATS', 'All ' . $type . ' statistics will be updated in the next update cycle. Message and Tracker counts will not be visible until the next update cycle.');
define('_XF_REG_TOAPPLYFILLIN', 'To apply for ' . $type . ' registration, you should fill in basic information about it. Please read descriptions below carefully and provide complete and comprehensive data. All fields below are mandatory.');
define('_XF_REG_PrOJECTFULLNAME', $utype . ' Full Name');
define('_XF_REG_FULLNAME', 'Full Name');
define('_XF_REG_PROJECTPURPOSE', $utype . ' Purpose and Summarization');
define('_XF_REG_LICENSE', 'License');
define('_XF_REG_LICENSES', 'Licenses');
define('_XF_REG_LICENSEFORTHISPROJECT', 'License for this ' . $utype);
define('_XF_REG_YOURLICENSE', 'Your License');
define('_XF_REG_PUBLICDESCRIPTION', $utype . ' Public Description');
define('_XF_REG_PROJECTUNIXNAME', $utype . ' Short Name');
define('_XF_REG_UNIXNAME', 'Short Name');
define('_XF_REP_INFO', 'Source Control Options');
define('_XF_REG_IAGREE', 'I AGREE');
define('_XF_REG_IAGREE_COMM', 'Submit');
define('_XF_REG_IDISAGREE', 'I DISAGREE');
define('_XF_REG_CONTINUE', 'Continue');
define('_XF_REG_BACK', 'Back');
define('_XF_REG_FINISH', 'Finish');
define('_XF_REG_YOUDISAGREED', 'You disagreed the terms and will be redirected to our front page');

// index.php
define('_XF_REG_PAGEHEADER', 'Start New Project');
define('_XF_REG_STEP1', 'Step 1 - Services and Requirements');
define('_XF_REG_STEP2', 'Step 2 - Terms of Service Agreement');
define('_XF_REG_STEP3', 'Step 3 - Project Information');
define('_XF_REG_TITLE', 'Start A New Project');
// define("_XF_REG_WELCOME","Welcome");
define('_XF_REG_SERVREQ', 'Services and Requirements');
define('_XF_REG_TOS', 'Terms of Service');
define('_XF_REG_PRJINFO', 'Project Information');

// requirements.php
//define("_XF_REG_STEP2","Step 2: Terms of Service Agreement");
