**
*
* Author neezer
*
* @param $girl
* @param $me
*
**/
function hook_date_formats(&$girl, &$me) {

  $safety = array{
    "feed cat",
    "oven on",
    "forgot meds", 
    "adopted baby delivery"
  };

  $score = getmatch($me->getQualities(), $girl->getQualities());
  
  swich($score) {
  
    case "epicfail":
      $me->setFocus(findOtherGirl({"range":10,"stealth":true}))
      if ($me->cellphone) {
        $me->cellphone("rescue_call");
      } else {
        $me->setExcuse($safety, $me->getFocus());
      }
      break;

    case "maybe":
      $me->getWithIt();
      $me->set($qualities["charm"], 11);
      getBoozed($me, $girl);
      $girl->setFocus($me);
      if ($me(getFocus($girl)) {;
        $me->setFollowup($girl->number);
      };
      break;

    case "the_one" :
      $me->setFocus($girl);

      //DEBUG: For Reference/Performance
      dsm($me->soul);

      $me->setFollowup($girl->number);
      $me->bounceHome();
      break;
  }

}
