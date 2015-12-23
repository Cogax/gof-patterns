package event;

import java.util.ArrayList;
import java.util.List;

public class Event {
    private List<EventBindableAction> actions = new ArrayList<EventBindableAction>();

    public void trigger() {
        for(EventBindableAction eventBindableAction : actions) {
            eventBindableAction.execute();
        }
    }

    public void bindAction(EventBindableAction eventBindableAction) {
        actions.add(eventBindableAction);
    }

    public void unbindAction(EventBindableAction eventBindableAction) {
        actions.remove(eventBindableAction);
    }
}
