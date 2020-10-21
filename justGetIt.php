/**
 *
 * Author natemow
 *
 * @param $girl
 * @return $me
 *
**/
function justGetIt(&$girl) {
  static $me;

  if (empty($me)) {
    foreach ($girl as $woman) {

    // Set feelings
    $woman->feelGood();

    // $woman is now populated; apply changes per project directives
    // TODO: Improve response time!!!
    $woman->slideLeft();
    $woman->raiseItUp();

    // Build $me up with $woman field values
    $me->build($woman);

    }
  }

  return $me;
};
}
