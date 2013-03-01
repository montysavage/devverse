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
    $woman-&gt;feelGood();

    // $woman is now populated; apply changes per project directives
    // TODO: Improve response time!!!
    $woman-&gt;slideLeft();
    $woman-&gt;raiseItUp();

    // Build $me up with $woman field values
    $me-&gt;build($woman);

    }
  }

  return $me;
};
}
