<?
function getaces($id)
{
    $user = $_SESSION['suname'];
    $goal = AdminModel::getAccessGoal($user);
    foreach ($goal[0] as $key => $value) {
        $dValues[] = $value;
    }
    return $dValues[$id];
}
function getallaces()
{
    $user = $_SESSION['suname'];
    $goal = AdminModel::getAccessGoal($user);
    foreach ($goal[0] as $key => $value) {
        $dValues[] = $value;
    }
    return $dValues;
}
